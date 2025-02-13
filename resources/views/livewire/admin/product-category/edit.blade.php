@extends('livewire.admin.layout.master')


@section('content')

    <section class="w-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="{{ route('admin.product-category.update', $productCategory) }}" class="form-control" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ویرایش دسته بندی</h3>
                </div>
                <div>نام دسته بندی :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" value="{{ old('name', $productCategory->name) }}" name="name" type="text" placeholder="نام دسته بندی">
                    @error('name')
                    <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
                <div>دسته والد :</div>
                <div class="input-group mb-2">
                    <select name="parent_id" id="" class="form-control form-control-sm rounded-2 border-1 p-3">
                        <option value="">دسته اصلی</option>
                        @foreach($parent_categories as $parent_category)
                            <option value="{{ $parent_category->id }}" @if(old('parent_id', $productCategory->parent_id) == $parent_category->id) selected @endif>
                                {{ $parent_category->name }}
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
                        <option value="1" @if(old('status', $productCategory->status) == 1) selected @endif>فعال</option>
                        <option value="0" @if(old('status', $productCategory->status) == 0) selected @endif>غیر فعال</option>
                    </select>
                    @error('status')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>
                <div>
                    <div>عکس دسته بندی :</div>
                    <div class="input-group mb-2">
                        <input class="form-control rounded-2 border-1" type="file" name="image" value="">
                        @error('image')
                        <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <img src="{{ asset($productCategory->image) }}" width="100" height="auto" alt="">
                    </div>
                </div>
                <div>توضیحات :</div>
                <div class="mb-6">
                    <textarea name="description" id="" cols="30" rows="10" class="form-control border-1" placeholder="توضیحات">{{ old('description', $productCategory->description) }}</textarea>
                    @error('description')
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

