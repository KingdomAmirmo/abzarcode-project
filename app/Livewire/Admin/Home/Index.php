<?php

namespace App\Livewire\Admin\Home;

use App\Models\Admin\Comment;
use App\Models\Admin\Product;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Lazy]
class Index extends Component
{
    public function placeholder()
    {
        return '<div class="mt-5 text-center">
    <div class="btn-stroke">
      <div class="spinner-border ms-2" role="status"></div>Loading
    </div>
  </div>';
    }


    public function seenComment()
    {
        $unseen_comments = Comment::where('seen', 0)->get();
        foreach($unseen_comments as $comment){
            $comment->seen = 1;
            $comment->save();
        }
        return back();
    }

    #[Title('ادمین | پیشخوان')]
    public function render()
    {
        $last_comments = Comment::orderBy('created_at', 'desc')->take(3)->get();
        $last_products = Product::orderBy('created_at', 'desc')->take(5)->get();
        $products = Product::all();
        $users = User::all();
        return view('livewire.admin.home.index', compact('users', 'products', 'last_products', 'last_comments'));

    }
}
