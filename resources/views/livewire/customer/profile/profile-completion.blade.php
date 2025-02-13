@extends('livewire.customer.layouts.user-panel-layouts.master')


@section('head-tag')
    <title>ابزار کد - تکمیل حساب کاربری</title>
@endsection
@section('content')


    <main>
        @if(session('successful'))
            <ul class="notifications">
                <li class="toast shadow success">
                    <div class="column">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 9L13.6308 12.7632C12.2957 14.2544 11.6282 15 10.75 15C9.8718 15 9.20425 14.2544 7.86917 12.7632L7 11.7924M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                stroke="#0ABF30" stroke-width="1.5" stroke-linecap="round" />
                        </svg>

                        <span>{{ session('successful') }}</span>
                    </div>
                    <button class="btn-hide-toast">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                </li>
            </ul>
        @endif

        @if(session('email-error'))
                <ul class="notifications">
                    <li class="toast shadow warning">
                        <div class="column">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 11V17M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                    stroke="#E9BD0C" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    fill="#E9BD0C" />
                            </svg>

                            <span>{{ session('email-error') }}</span>
                        </div>
                        <button class="btn-hide-toast">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                    </li>
                </ul>
        @endif

        @if(session('mobile-error'))
            <ul class="notifications">
                <li class="toast shadow warning">
                    <div class="column">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 11V17M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                stroke="#E9BD0C" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                fill="#E9BD0C" />
                        </svg>

                        <span>{{ session('mobile-error') }}</span>
                    </div>
                    <button class="btn-hide-toast">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                </li>
            </ul>
        @endif


        @if($errors->any())
            <ul class="notifications">
                @foreach($errors->all() as $error)
                    <li class="toast shadow error">
                        <div class="column">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.87868 10.1213L14.1213 14.364M9.87868 14.364L14.1213 10.1213M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                    stroke="#E24D4C" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span>{{ $error }}</span>
                        </div>
                        <button class="btn-hide-toast">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                    </li>
                @endforeach

                {{--            <li class="toast shadow warning">--}}
                {{--                <div class="column">--}}
                {{--                    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                        <path--}}
                {{--                            d="M12 11V17M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"--}}
                {{--                            stroke="#E9BD0C" stroke-width="1.5" stroke-linecap="round" />--}}
                {{--                        <path--}}
                {{--                            d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"--}}
                {{--                            fill="#E9BD0C" />--}}
                {{--                    </svg>--}}

                {{--                    <span>نام و نام خانوادگی را پر نکرده‌اید</span>--}}
                {{--                </div>--}}
                {{--                <button class="btn-hide-toast">--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">--}}
                {{--                        <path d="M5 5L19 19M5.00003 19L12 12L19 5" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" />--}}
                {{--                    </svg>--}}
                {{--                </button>--}}
                {{--            </li>--}}

            </ul>
        @endif


        <div class="row">
            <section class="col-12 col-lg-8 ">
                <div class="items-container px-3 px-md-4 py-4 shadow-sm">

                    <article class="arc-title">
                        <h4>جزئیات حساب کاربری</h4>
                        <span>
                            @if($user->user_type == 1)
                                نقش : ادمین
                            @else
                                نقش : کاربر
                            @endif
                        </span>

                    </article>

                    <div class="mt-2">
                        @if($user->profile_photo_path != null)
                            <div class="w-25">
                                <img src="{{ asset($user->profile_photo_path) }}" alt="image" class="img-fluid w-75" style="border-radius: 1rem">
                            </div>
                        @else
                            <article class="arc-user-img my-4">
                                <div>
                                    <img src="{{ asset('images/IMG_20241124_190646_739.png') }}" alt="image" class="img-fluid">
                                </div>
                            </article>

                        @endif
                    </div>


                    <article class="arc-user-info mt-4">
                        <form action="{{ route('customer.profile.updateUser', $user) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="w-100 ms-0 ms-md-3">
                                <label for="image" class="form-label">عکس پروفایل</label>
                                <input type="file" name="profile_photo_path" class="form-control shadow-none" id="image">
                                @error('profile_photo_path')
                                <div class="mt-2 mb-2">
                                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                </div>
                                @enderror
                                @if(session('photo-error'))
                                    <div class="alert alert-danger">
                                        {{ session('photo-error') }}
                                    </div>
                                @endif

                                <section class="row">

                                </section>
                            </div>


                            <div class="d-block d-md-flex">

                                <div class="mb-3 w-100 ms-0 ms-md-3">
                                    <label for="exampleInputEmail1" class="form-label">نام</label>
                                    <input type="text" name="first_name" class="form-control shadow-none" id="exampleInputEmail1"
                                           value="{{ old('first_name', $user->first_name)  }}" placeholder="نام خود را وارد کنید">
                                </div>

                                <div class="mb-3 w-100 ms-0 ms-md-3">
                                    <label for="exampleInputPassword1" class="form-label">نام خانوادگی</label>
                                    <input type="text" name="last_name" class="form-control shadow-none" id="exampleInputPassword1"
                                           value="{{ old('last_name', $user->last_name) }}" placeholder="نام خانوادگی خود را وارد کنید">
                                </div>

                            </div>

                            <div class="d-block d-md-flex mt-2">

                                <div class="mb-3 w-100 ms-0 ms-md-3">
                                        <label for="exampleInputPassword1" class="form-label">شماره موبایل</label>
                                        <input type="text" name="mobile" value="{{ old('mobile', $user->mobile) }}" class="form-control text-right" id="exampleInputPassword1"
                                               placeholder="شماره موبایل خود را وارد کنید">
                                </div>


                                <div class="mb-3 w-100 ms-0 ms-md-3">
                                        <label for="exampleInputPassword1" class="form-label">ایمیل</label>
                                        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control text-start" id="exampleInputPassword1"
                                               placeholder="ایمیل خود را وارد کنید" >
                                </div>

                            </div>

                            <div class="text-end mt-5">
                                <button type="submit" class="btn-submit">ثبت اطلاعات</button>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
            <section class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="items-container px-3 px-md-4 py-4 h-100 shadow-sm">
                    <article class="arc-title">
                        <h4>محبوب ترین نمونه کارها</h4>
                    </article>
                    @foreach($related_products as $related_product)
                        <article class="arc-user-info mt-4">
                            <!-- templates -->
                            <div class="templates d-flex justify-content-start align-items-center mb-3">
                                <div class="me-3">
                                    <a href="{{ $related_product->url  }}" target="_blank">
                                        <img src="{{ asset($related_product->image) }}" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ $related_product->url  }}" target="_blank">
                                        {{ $related_product->title }}
                                    </a>
                                    <p class="m-0" >
                                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none" class="me-1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 7.49999L4.5 8.99999L6 10.5" stroke="#64748B" stroke-width="1.2"
                                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 7.49999L13.5 8.99999L12 10.5" stroke="#64748B" stroke-width="1.2"
                                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 8.99999C16.5 4.85786 13.1421 1.49999 9 1.49999C4.85786 1.49999 1.5 4.85786 1.5 8.99999C1.5 13.1421 4.85786 16.5 9 16.5Z"
                                                stroke="#64748B" stroke-width="1.2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.75 7.25248L8.25 10.7475" stroke="#64748B" stroke-width="1.2"
                                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                       {{ $related_product->development_type == 0 ? "بر پایه وردپرس" : "کدنویسی اختصاصی" }}
                                    </p>
                                </div>
                            </div>
                            <!-- templates -->
                        </article>

                    @endforeach

                </div>
            </section>
        </div>





    </main>

@endsection


@section('script')


    <script>
        let btnCloseToast = document.querySelectorAll('.btn-hide-toast')
        btnCloseToast.forEach(btn => {
            setTimeout(() => {
                btn.parentElement.remove()
            }, 5000)
            btn.addEventListener('click', (e) => {

                btn.parentElement.remove()
            })
        })
    </script>

@endsection

