@extends('livewire.admin.layout.master')


@section('content')

    <section class="w-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="{{ route('admin.setting.update', $setting) }}" class="form-control" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ویرایش تنظیمات سایت</h3>
                </div>
                <div>عنوان سایت :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" name="title" type="text" placeholder="عنوان" value="{{ old('title', $setting->title) }}">
                    @error('title')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>
                    <div>آیکون :</div>
                    <div class="input-group mb-2">
                        <input class="form-control rounded-2 border-1" name="icon" type="file" value="">
                        @error('icon')
                        <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <img src="{{ asset($setting->icon) }}" width="50" height="auto" alt="">
                    </div>
                </div>

                <div>
                    <div>لوگو :</div>
                    <div class="input-group mb-2">
                        <input class="form-control rounded-2 border-1" name="logo" type="file" value="#">
                        @error('logo')
                        <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <img src="{{ asset($setting->logo) }}" width="50" height="auto" alt="">
                    </div>
                </div>

                <div>کلمات کلیدی سایت :</div>
                <div class="mb-6">
                    <textarea name="keywords" id="" cols="30" rows="6" class="form-control border-1" placeholder="توضیحات">{{ old('keywords', $setting->keywords) }}</textarea>
                    @error('keywords')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>

                <div>توضیحات :</div>
                <div class="mb-6">
                    <textarea name="description" id="" cols="30" rows="10" class="form-control border-1" placeholder="توضیحات">{{ old('description', $setting->description) }}</textarea>
                    @error('description')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>

                <button type="submit" class="btn w-100 fs-6">
                    ثبت
                </button>
            </form>
        </div>
    </section>



@endsection

