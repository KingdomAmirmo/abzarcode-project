<?php

namespace App\Http\Controllers\Customer\Faq;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('livewire.customer.faq.index', compact('faqs'));
    }
}
