<?php

namespace App\Livewire\Admin\Product;

use App\Models\Admin\Product;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Comment;

class Dashboard extends Component
{
    #[Title('داشبورد محصولات')]

    public function render()
    {
        $users = User::all();
        $comments = Comment::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.product.dashboard', compact('products','users', 'comments'));
    }
}
