@extends('livewire.customer.layouts.user-panel-layouts.master')



@section('head-tag')
    <title>ابزار کد - ثبت سفارش</title>
@endsection


@section('content')



    <main>
        <div class="row">
            <section class="col-12 col-lg-8 ">
                <div class="items-container px-3 px-md-4 py-4 shadow-sm">
                    <article class="arc-title">
                        <h4>ثبت سفارش</h4>
                    </article>
                    <article class="arc-user-infos mt-4">
                        <form action="{{ route('customer.profile.storeOrder') }}" method="post">
                            @csrf
                            <section class="row">
                                <article class="col-12 col-lg-6">
                                    <div class="mb-3 w-100">
                                        <label for="exampleInputEmail1" class="form-label">نام</label>
                                        <input type="text" name="first_name" class="form-control shadow-none" id="exampleInputEmail1"
                                               value="{{ old('first_name', $user->first_name) }}" placeholder="نام خود را وارد کنید">
                                        @error('first_name')
                                            <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 w-100">
                                        <label for="exampleInputPassword1" class="form-label">نام خانوادگی</label>
                                        <input type="text" name="last_name" class="form-control shadow-none" id="exampleInputPassword1"
                                               value="{{ old( 'last_name', $user->last_name) }}" placeholder="نام خانوداگی خود را وارد کنید">
                                        @error('last_name')
                                           <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                           </div>
                                        @enderror
                                    </div>

                                    @if($user->mobile == null)
                                        <div class="mb-3 w-100">
                                            <label for="exampleInputPassword1" class="form-label">شماره موبایل</label>
                                            <input type="text" name="mobile" class="form-control text-right" id="exampleInputPassword1"
                                                   placeholder="شماره موبایل خود را وارد کنید" value="{{ old('mobile') }}">
                                            @error('mobile')
                                                <div class="mt-2">
                                                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </span>
                                                </div>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="mb-3 w-100">
                                            <label for="exampleInputPassword1" class="form-label">شماره موبایل</label>
                                            <input type="text" class="form-control text-end" id="exampleInputPassword1"
                                                   value="{{ $user->mobile ?? '-' }}" disabled>
                                        </div>
                                    @endif


                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">پلن ها</label>
                                        <select class="shadow-none" name="plan">
                                            <option selected>پلن مورد نظر خود را انتخاب کنید</option>
                                            <option value="1" @if(old('plan') == 1) selected @endif>وردپرس طلایی</option>
                                            <option value="2" @if(old('plan') == 2) selected @endif>وردپرس نقره ای</option>
                                            <option value="3" @if(old('plan') == 3) selected @endif>وردپرس برنزی</option>
                                            <option value="4" @if(old('plan') == 4) selected @endif>کدنویسی طلایی</option>
                                            <option value="5" @if(old('plan') == 5) selected @endif>کدنویسی نقره ای</option>
                                            <option value="6" @if(old('plan') == 6) selected @endif>کدنویسی برنزی</option>
                                        </select>
                                        @error('plan')
                                            <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>


                                </article>
                                <article class="col-12 col-lg-6 mt-5 mt-lg-0">
                                    <div class="mb-3 w-100">
                                        <label for="exampleInputPassword1" class="form-label">توضیحات</label>
                                        <textarea name="description" id="" class="w-100 p-2" rows="14">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn-submit-order">ثبت اطلاعات</button>
                                    </div>
                                </article>
                            </section>
                        </form>
                    </article>
                </div>
            </section>
            <section class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="items-container px-3 px-md-4 py-4 shadow-sm">
                    <article class="arc-title">
                        <h4>نیاز به کمک دارید؟</h4>
                    </article>
                    <article class="arc-user-infos mt-4">
                        <div>
                            <p class="m-0">در صورت داشتن هرگونه مشکل یا مشاوره میتوانید با مشاوران و بخش پشتیبانی ما در
                                ارتباط
                                باشید.</p>
                        </div>
                        <div class="mt-5 text-end">
                            <div class="contact">
                                <a href="tg://resolve?domain=AbzarCode_Support">
                                    AbzarCode_Support
                                    <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.90891 11.0952L19.2976 4.44458C20.0212 4.13183 20.8054 4.74041 20.682 5.51906L18.5779 18.795C18.448 19.6151 17.4331 19.9287 16.8631 19.325L13.5295 15.7699C12.8523 15.0526 12.7992 13.9488 13.4045 13.1698L15.7232 9.92966C15.8626 9.75029 15.6425 9.51431 15.4538 9.64086L10.6065 12.8927C9.78393 13.4445 8.78586 13.6715 7.80554 13.5297L4.16248 13.0028C3.16449 12.8585 2.98328 11.4952 3.90891 11.0952Z"
                                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="contact">
                                <a href="mailto:Abzarcode@gmail.com">
                                    AbzarCode@gmail.com
                                    <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6 19.6C13.8 19.9 12.9 20 12 20C7.6 20 4 16.4 4 12C4 7.6 7.6 4 12 4C16.4 4 20 7.6 20 12C20 12.5 20 12.2 20 12.5C19.5 16.5 16.6388 16.6433 15.5 15.2C14.6148 14.0781 15.1 12.5 16.2 9.3M13.0539 8.33156C14.7871 9.05394 15.4859 11.3338 14.6148 13.4238C13.7437 15.5139 11.6326 16.6225 9.89937 15.9002C8.16619 15.1778 7.46734 12.8979 8.33844 10.8079C9.20954 8.71787 11.3207 7.60918 13.0539 8.33156Z" stroke="#292D32" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </a>
                            </div>
                            <div class="contact">
                                <div href="#">
                                    <a href="tel:09361226158" class="text-dark text-decoration-none" dir="ltr">
                                        0936 122 6158
                                    </a>
                                    ,
                                    <a href="tel:09020871426" class="text-dark text-decoration-none" dir="ltr">
                                        0902 087 1426
                                     </a>
                                    <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5187 20.8312C8.99707 18.6339 5.50186 14.6437 3.27588 9.01866C2.7194 7.89365 2.71938 5.08115 6.05833 3.28114C6.89306 2.83114 7.7278 2.83113 8.84079 3.95615C9.95377 5.08116 8.84078 3.95614 9.95377 5.08114C11.2338 6.375 11.0976 7.5 10.875 8.0625C10.6524 8.7375 9.61987 9.35616 9.95377 10.7062C10.2877 12.0562 11.9571 13.8562 13.2927 14.0812C14.6283 14.3062 15.381 13.4625 15.9375 13.125C16.494 12.7875 17.4142 12.6222 18.3011 13.5187C18.75 13.9724 18.8576 14.0812 19.9706 15.2062C21.0836 16.3312 21.2094 17.2442 20.7497 18.0187C19.3125 20.9404 16.8946 21.2948 15.5187 20.8312Z" stroke="#292D32" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>



@endsection
