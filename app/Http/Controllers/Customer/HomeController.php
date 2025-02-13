<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Comment;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
//        Auth::LoginUsingId(1);
        $products = Product::orderBy('created_at', 'desc')->take(8)->get();
        $comments = Comment::where('approved', 1)->where('parent_id' , null)->orderBy('created_at', 'desc')->get();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('livewire.customer.home', compact('products', 'comments', 'blogs'));
    }
}
