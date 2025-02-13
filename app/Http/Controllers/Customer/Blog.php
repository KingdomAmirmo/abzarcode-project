<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use Illuminate\Http\Request;
use App\Models\Admin\Blog as BlogModel;
use Illuminate\Support\Facades\Auth;

class Blog extends Controller
{
    public function index()
    {
        $blogs = BlogModel::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('livewire.customer.blog.index', compact('blogs'));
    }


    public function show(BlogModel $blog)
    {
        $latestBlogs = BlogModel::orderBy('created_at', 'desc')->where('status', 1)->take(5)->get();
        return view('livewire.customer.blog.show', compact('blog', 'latestBlogs'));
    }

    public function addComment(Request $request, BlogModel $blog)
    {
        $request->validate([
            'body' => 'required|min:5|max:500',
        ]);
        $inputs = $request->all();
        $inputs['author_id'] = Auth::id();
        $inputs['commentable_id'] = $blog->id;
        $inputs['commentable_type'] = BlogModel::class;
        $comment = Comment::create($inputs);
        return to_route('customer.blog.show', $blog)->with('swal-success', "نظر شما با موفقیت ثبت شد،پس از بررسی به زودی در سایت منتشر خواهد شد،سپاس");

    }
}
