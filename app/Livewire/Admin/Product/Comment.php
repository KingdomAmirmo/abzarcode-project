<?php

namespace App\Livewire\Admin\Product;

use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Comment as CommentModel;
class Comment extends Component
{

    #[Title('کامنت ها')]
    public function show(CommentModel $comment)
    {
        return view('livewire.admin.product.comment.show', compact('comment'));
    }

    public function approved(CommentModel $comment)
    {
        $comment->approved = $comment->approved == 0 ? 1 : 0;
        $result = $comment->save();
        if ($result)
        {
            return redirect()->route('admin.product.comment.index')->with('swal-success', "وضعیت نظر با موفقیت تغییر کرد");
        }
        else
        {
            return redirect()->route('admin.product.comment.index')->with('swal-error', 'وضعیت نظر با خطا مواجه شد');
        }
    }

    public function answer(Request $request, CommentModel $comment)
    {
        $inputs = $request->validate([
            'body' => 'required|min:2|max:750',
        ]);
        if ($comment->parent_id == null)
        {
            $inputs = $request->all();
            $inputs['author_id'] = 1;
            $inputs['parent_id'] = $comment->id;
            $inputs['commentable_id'] = $comment->commentable_id;
            $inputs['commentable_type'] = $comment->commentable_type;
            $inputs['approved'] = 1;
            $inputs['status'] = 1;
            $comment = CommentModel::create($inputs);
            return redirect()->route('admin.product.comment.index')->with('swal-success', 'پاسخ شما باموفقیت ثبت شد');
        }else{
            return redirect()->route('admin.product.comment.index')->with('swal-error', 'خطا');

        }
    }

    public function destroy(CommentModel $comment)
    {
        $comment->delete();
        return to_route('admin.product.comment.index')->with('swal-success', "نظر انتخاب شده با موفقیت حذف شد");
    }


    public function render()
    {
        $comments = CommentModel::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.admin.product.comment.index', compact('comments'));
    }
}
