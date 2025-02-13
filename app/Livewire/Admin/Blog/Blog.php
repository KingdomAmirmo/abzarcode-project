<?php

namespace App\Livewire\Admin\Blog;


use App\Http\Requests\Admin\Blog\BlogStoreRequest;
use App\Http\Requests\Admin\Blog\BlogUpdateRequest;
use Livewire\Component;
use App\Models\Admin\Blog as BlogModel;
class Blog extends Component
{

    public function create()
    {
        return view('livewire.admin.blog.create');
    }

    public function store(BlogStoreRequest $request)
    {
        $inputs = $request->all();
        $file = $inputs['image'];
        $directory = date('Ymd');
        $fileName = date('His') . "." . $file->getClientOriginalExtension();
        $result = $file->move('images' . DIRECTORY_SEPARATOR . 'blog' . DIRECTORY_SEPARATOR . $directory, $fileName);
        $inputs['image'] = $result->getPathname();
        $inputs['author_id'] = 2;
        $blog = BlogModel::create($inputs);
        return to_route('admin.blog.index')->with('swal-success', "مقاله جدید شما با موفقیت ثبت شد");
    }


    public function edit(BlogModel $blog)
    {
        return view('livewire.admin.blog.edit', compact('blog'));
    }

    public function update(BlogUpdateRequest $request, BlogModel $blog)
    {
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (unlink(public_path($blog->image))) {
                $file = $inputs['image'];
                $directory = date('Ymd');
                $fileName = date('His') . "." . $file->getClientOriginalExtension();
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'blog' . DIRECTORY_SEPARATOR . $directory, $fileName);
                $inputs['image'] = $result->getPathname();
            }
            else {
                return to_route('admin.blog.index')->with('swal-error', "آپلود تصویر با خطا مواجه شد");
            }
        }
        else {
            $inputs['image'] = $blog->image;
        }
        $blog->update($inputs);
        return to_route('admin.blog.index')->with('swal-success', "مقاله شما با موفقیت ویرایش شد");
    }

    public function destroy(BlogModel $blog)
    {
        $blog->delete();
        return to_route('admin.blog.index')->with('swal-success', "مقاله مورد نظر با موفقیت حذف شد");
    }







    public function render()
    {
        $blogs = BlogModel::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.blog.index', compact('blogs'));
    }
}
