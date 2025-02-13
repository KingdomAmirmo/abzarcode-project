@extends('livewire.customer.layouts.master-simple')
@section('head-tag')
    <title>کد تایید فعالسازی</title>
    <style>
        .input-group {
            background: var(--white);
            padding: 10px;
        }

        .input-group input {
            background-color: var(--milky);
            text-align: center;
            border-radius: 5px !important;
        }

        .input-group input:focus {
            background: var(--milky);
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }

        .input-group input::placeholder {
            color: #64748b6b;
            font-size: 14px;
            letter-spacing: -5px;
        }

    </style>
@endsection



@section('content')
    <section class="section-login">
        <div class="text-center">
            <img src="{{ asset('customer-assets/images/logo/Group.png') }}" alt="">
        </div>
        <form action="{{ route('auth.customer.login-confirm', $token) }}" method="post">
            @csrf
            <div class="mb-4 mt-3">
                <h3 class="text-center">کد را وارد کنید</h3>
            </div>
            <div>
                <div class="input-group mb-3" id="inputs" style="direction: ltr">
                    <input type="text" id="otp_one" name="otp_one" class="form-control border-0 me-2  rounded-0" placeholder="---" maxlength="1">
                    <input type="text" id="otp_one" name="otp_two" class="form-control border-0 me-2  rounded-0" placeholder="___" maxlength="1">
                    <input type="text" id="otp_one" name="otp_three" class="form-control border-0 me-2  rounded-0" placeholder="___" maxlength="1">
                    <input type="text" id="otp_one" name="otp_four" class="form-control border-0 me-2  rounded-0" placeholder="___" maxlength="1">
                    <input type="text" id="otp_one" name="otp_five" class="form-control border-0 me-2  rounded-0" placeholder="___" maxlength="1">
                    <input type="text" id="otp_one" name="otp_six" class="form-control border-0 me-2 rounded-0" placeholder="___" maxlength="1">
                </div>

                @if($otp->type == 0)
                    <section class="login-info">
                        کد تایید برای شماره موبایل {{ $otp->login_id }} ارسال گردید
                    </section>
                @else
                    <section class="login-info">
                        کد تایید برای ایمیل {{ $otp->login_id }} ارسال گردید
                    </section>
                @endif

                <div class="my-2">
                    @error('otp')
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

                <section id="resend-otp" class="d-none mt-2php">
                    <a href="{{ route('auth.customer.login-resend-otp', $token) }}" class="text-decoration-none text-primary">دریافت مجدد کد تایید</a>
                </section>
                <section id="timer"></section>

            </div>
        </form>
        <div class="text-center mt-4">
            <span>
                <a href="{{ route('auth.customer.login-register-form') }}" class="register-link">بازگشت به صفحه ورود</a>
            </span>
        </div>
    </section>
@endsection


@section('script')

    @php
        $timer = ((new \Carbon\Carbon($otp->created_at))->addMinutes(3)->timestamp - \Carbon\Carbon::now()->timestamp) * 1000;
    @endphp

    <script>

        var countDownDate = new Date().getTime() + {{ $timer }};
        var timer = $('#timer');
        var resendOtp = $('#resend-otp');

        var x = setInterval(function(){

            var now = new Date().getTime();

            var distance = countDownDate - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if(minutes == 0){
                timer.html('ارسال مجدد کد تایید تا ' + seconds + 'ثانیه دیگر')
            }
            else{
                timer.html('ارسال مجدد کد تایید تا ' + minutes + 'دقیقه و ' + seconds + 'ثانیه دیگر');
            }
            if(distance < 0)
            {
                clearInterval(x);
                timer.addClass('d-none');
                resendOtp.removeClass('d-none');
            }

        }, 1000)





        // for auto switch otp code

        const inputs = document.getElementById("inputs");

        inputs.addEventListener("input", function (e) {
            const target = e.target;
            const val = target.value;

            if (isNaN(val)) {
                target.value = "";
                return;
            }

            if (val != "") {
                const next = target.nextElementSibling;
                if (next) {
                    next.focus();
                }
            }
        });

        inputs.addEventListener("keyup", function (e) {
            const target = e.target;
            const key = e.key.toLowerCase();

            if (key == "backspace" || key == "delete") {
                target.value = "";
                const prev = target.previousElementSibling;
                if (prev) {
                    prev.focus();
                }
                return;
            }
        });





    </script>

@endsection

