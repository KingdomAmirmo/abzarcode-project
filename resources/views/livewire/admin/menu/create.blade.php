@extends('livewire.admin.layout.master')


@section('content')

    <section class="w-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="{{ route('admin.menu.store') }}" class="form-control" method="post">
                @csrf
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ثبت منو جدید</h3>
                </div>
                <div>نام منو :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" value="{{ old('name') }}" name="name" type="text" placeholder="نام منو">
                    @error('name')
                    <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
                <div>منو والد :</div>
                <div class="input-group mb-2">
                    <select name="parent_id" id="" class="form-control form-control-sm rounded-2 border-1 p-3">
                        <option value="">منوی اصلی</option>
                        @foreach($parent_menus as $parent_menu)
                            <option value="{{ $parent_menu->id }}" @if(old('parent_id') == $parent_menu->id) selected @endif>
                                {{ $parent_menu->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('parent_id')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>وضعیت :</div>
                <div class="input-group mb-2">
                    <select class="form-control rounded-2 border-1" name="status">
                        <option selected>وضعیت را انتخاب نمایید</option>
                        <option value="1" @if(old('status') == 1) selected @endif>فعال</option>
                        <option value="0" @if(old('status') == 0) selected @endif>غیر فعال</option>
                    </select>
                    @error('status')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>آدرس منو :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" value="{{ old('url') }}" name="url" type="text" placeholder="مثال : digikala.com">
                    @error('url')
                    <span class="alert-red py-1" role="alert">
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

