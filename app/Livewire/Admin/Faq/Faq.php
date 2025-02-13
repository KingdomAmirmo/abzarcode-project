<?php

namespace App\Livewire\Admin\Faq;

use App\Http\Requests\Admin\Faq\FaqStoreRequest;
use App\Http\Requests\Admin\Faq\FaqUpdateRequest;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Faq as FaqModel;

class Faq extends Component
{
    #[Title('سوالات متداول')]

    public function create()
    {
        return view('livewire.admin.faq.create');
    }

    public function store(FaqStoreRequest $request)
    {
        $inputs = $request->all();
        $faq = FaqModel::create($inputs);
        return to_route('admin.faq.index')->with('swal-success', "سوال شما با موفقیت ثبت شد");

    }

    public function edit(FaqModel $faq)
    {
        return view('livewire.admin.faq.edit', compact('faq'));
    }

    public function update(FaqUpdateRequest $request, FaqModel $faq)
    {
        $inputs = $request->all();
        $faq->update($inputs);
        return to_route('admin.faq.index')->with('swal-success', "سوال شما با موفقیت ویرایش شد");
    }

    public function destroy(FaqModel $faq)
    {
        $faq->delete();
        return to_route('admin.faq.index')->with('swal-success', "سوال مورد نظر با موفقیت حذف شد");
    }
    public function render()
    {
        $faqs = FaqModel::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.faq.index', compact('faqs'));
    }
}
