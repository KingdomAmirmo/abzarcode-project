@extends('livewire.admin.layout.master')


@section('content')

    <section class="w-100 d-flex justify-content-center align-items-center">
        <div>
            <form action="{{ route('admin.blog.update', $blog) }}" class="form-control" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ویرایش دسته بندی</h3>
                </div>
                <div>عنوان مقاله :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" value="{{ old('title', $blog->title) }}" name="title" type="text" placeholder="عنوان مقاله">
                    @error('title')
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
                        <option selected>وضعیت را انتخاب نمایید</option>
                        <option value="1" @if(old('status', $blog->status) == 1) selected @endif>فعال</option>
                        <option value="0" @if(old('status', $blog->status) == 0) selected @endif>غیر فعال</option>
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
                    <div>عکس مقاله :</div>
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
                        <img src="{{ asset($blog->image) }}" width="100" height="auto" alt="">
                    </div>
                </div>
                <div>توضیحات :</div>
                <div class="mb-6">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control border-1" placeholder="توضیحات">{{ old('description', $blog->description) }}</textarea>
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


@section('script')

    <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
