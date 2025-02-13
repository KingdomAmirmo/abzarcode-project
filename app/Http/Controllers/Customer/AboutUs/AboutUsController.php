<?php

namespace App\Http\Controllers\Customer\AboutUs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\AboutUs\ConsultationStoreRequest;
use App\Models\Admin\Consultation;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('livewire.customer.about-us.index');
    }

    public function storeConsultation(ConsultationStoreRequest $request)
    {
        $inputs = $request->all();
        $consultation = Consultation::create($inputs);
        return to_route('customer.about-us.index')->with('swal-success', "درخواست مشاوره شما با موفقیت ثبت شد.کارشناسان ما به زودی با شما تماس خواهند گرفت.");
    }
}
