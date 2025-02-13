@extends('livewire.customer.layouts.master-simple')
@section('head-tag')
    <title>ورود/ثبت نام</title>
@endsection

@section('content')
    <section class="section-login">
        <div class="text-center">
            <img src="{{ asset('customer-assets/images/logo/Group.png') }}" alt="logo">
        </div>
        <form action="{{ route('auth.customer.login-register') }}" method="post">
            @csrf
            <div class="mb-4 mt-3">
                <h3 class="text-center">ورود / ثبت نام</h3>
            </div>
            <div>
                <div class="input-group mb-3">
                    <input type="text" name="id" class="form-control border-0" placeholder="شماره موبایل یا ایمیل خود را وارد نمایید">
                    <label for="" class="ms-2">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5187 20.8312C8.99707 18.6339 5.50186 14.6437 3.27588 9.01866C2.7194 7.89365 2.71938 5.08115 6.05833 3.28114C6.89306 2.83114 7.7278 2.83113 8.84079 3.95615C9.95377 5.08116 8.84078 3.95614 9.95377 5.08114C11.2338 6.375 11.0976 7.5 10.875 8.0625C10.6524 8.7375 9.61987 9.35616 9.95377 10.7062C10.2877 12.0562 11.9571 13.8562 13.2927 14.0812C14.6283 14.3062 15.381 13.4625 15.9375 13.125C16.494 12.7875 17.4142 12.6222 18.3011 13.5187C18.75 13.9724 18.8576 14.0812 19.9706 15.2062C21.0836 16.3312 21.2094 17.2442 20.7497 18.0187C19.3125 20.9404 16.8946 21.2948 15.5187 20.8312Z"
                                stroke="#64748B" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                </div>
                <div class="my-2">
                    @error('id')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <button class="btn-submit" type="submit">ادامه</button>
                </div>
            </div>
        </form>
        <div class="text-center mt-4">
            <span>

                <a href="{{ route('customer.home') }}" class="register-link">بازگشت به صفحه اصلی</a>
            </span>
        </div>
    </section>
@endsection
