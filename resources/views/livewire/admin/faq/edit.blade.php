@extends('livewire.admin.layout.master')

@section('content')
    <section class="w-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="{{ route('admin.faq.update', $faq) }}" class="form-control" method="post">
                @csrf
                @method('put')
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ویرایش سوال متداول</h3>
                </div>
                <div>سوال :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" type="text" name="question" value="{{ old('question', $faq->question) }}" placeholder="سوال خود را بنویسید">
                    @error('question')
                    <span class="alert-red py-1" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>وضعیت :</div>
                <div class="input-group mb-2">
                    <select class="form-control rounded-2 border-1" name="status">
                        <option>وضعیت را انتخاب نمایید</option>
                        <option value="1" @if(old('status', $faq->status) == 1) selected @endif>فعال</option>
                        <option value="0" @if(old('status', $faq->status) == 0) selected @endif>غیر فعال</option>
                    </select>
                    @error('status')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>پاسخ :</div>
                <div class="mb-6">
                    <textarea name="answer" id="" cols="30" rows="10" class="form-control border-1" placeholder="جواب سوال">{{ old('answer', $faq->answer) }}</textarea>
                    @error('answer')
                         <span class="alert-red py-1" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn w-100 fs-6">
                    ثبت سوال
                </button>
            </form>
        </div>
    </section>
@endsection
