@extends('livewire.customer.layouts.master_about_us')

@section('head-tag')
    <title>ابزار کد - درباره ما</title>
{{--    <style>--}}
{{--        @media (min-width: 300px) {--}}
{{--            .img-zal {--}}
{{--                height: 460px ;--}}
{{--            }--}}
{{--        }--}}
{{--        @media (min-width: 600px) {--}}
{{--            .img-zal {--}}
{{--                height: 320px ;--}}
{{--            }--}}
{{--        }--}}
{{--        @media (min-width: 900px) {--}}
{{--            .img-zal {--}}
{{--                height: 460px ;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
@endsection
@section('content')

    <main class="py-5">
        <div class="container">
            <section class="section-title d-flex justify-content-center py-3 py-md-5">
                <article class="d-flex align-items-center">
                    <svg width="37" height="18" viewBox="0 0 37 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="me-2">
                        <rect x="9.34595" width="27.346" height="10.3721" rx="5.18605" fill="#111111" />
                        <rect x="0.345947" y="7.1322" width="30.2202" height="10.5771" rx="5.28853" fill="#AB9AFF" />
                    </svg>
                    <h5>میخوام داستان یکی رو برات بگم</h5>
                    <svg width="37" height="18" viewBox="0 0 37 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="ms-2">
                        <rect width="27.346" height="10.3721" rx="5.18605" transform="matrix(-1 0 0 1 27.3459 0)"
                              fill="#111111" />
                        <rect width="30.2202" height="10.5771" rx="5.28853" transform="matrix(-1 0 0 1 36.3459 7.1322)"
                              fill="#AB9AFF" />
                    </svg>
                </article>
            </section>
            <section class="section-info-group py-4 py-md-5">
                <div class="row">
                    <article class="arc-image-us col-12 col-md-6">
                        <div>
                            <img src="{{ asset('images/Intersect.png') }}" alt="" class="img-fluid">
                        </div>
                    </article>
                    <article class="arc-info-us col-12 col-md-6 mt-4 mt-md-0">
                        <div>
                            <h6 class="mb-3">همه چی برمیگرده به سال ۱۴۰۰ ...</h6>
                            <p class="m-0">
                                یک روز چند تا رفیق کنار هم نشسته بودند و درباره آرزوهاشون صحبت می‌کردند. خیلی از بچه ها برنامه نویس و طراح های گرافیک با استعدادی بودن، همشون به دنیای دیجیتال و قدرت آن ایمان داشتند. آن‌ها می‌دانستند که تجارت الکترونیک می‌تواند زندگی‌ ها را تغییر دهد و کسب‌وکارها را به اوج برساند.
                                با وجود چالش‌های فراوان، از کمبود منابع مالی گرفته تا رقابت شدید، آن‌ها هرگز تسلیم نشدند. شب‌ها تا دیروقت کار می‌کردند، پروژه‌های کوچک را قبول می‌کردند و به تدریج نام ابزار کد را در بازار جا انداختند. هر مشتری که با آن‌ها همکاری می‌کرد، نه تنها خدمات حرفه‌ای و باکیفیت دریافت می‌کرد، بلکه احساس می‌کرد که در یک خانواده بزرگ‌تر قرار دارد.
                                آن‌ها می‌دانند که هر وب‌سایت داستانی دارد و هدفشان کمک به شما در روایت داستان موفقیت‌تان است.
                                با انتخاب <span style="font-weight: bold">ابزار کد</span>، شما نه تنها یک وب‌سایت دریافت می‌کنید، بلکه به داستانی پیوسته‌اید که در آن هر موفقیت، موفقیت مشترک ماست. بیایید با هم داستان موفقیت‌تان را بنویسیم!
                            </p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
{{--        <section class="section-companys-logo py-2">--}}
{{--            <div class="container">--}}
{{--                <article class="d-flex justify-content-between">--}}
{{--                    <div>--}}
{{--                        <p>لوگو های شرکتایی که باهاشون کار کردیم</p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <p>لوگو های شرکتایی که باهاشون کار کردیم</p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <p>لوگو های شرکتایی که باهاشون کار کردیم</p>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </section>--}}
        <div class="container">
            <section class="section-our-profile py-4 py-md-5">
                <article>
                    <div class="title-sections">
                        <div>
                            <svg width="37" height="18" viewBox="0 0 37 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="27.346" height="10.3721" rx="5.18605" fill="#111111" />
                                <rect y="7.1322" width="30.2202" height="10.5771" rx="5.28853" fill="#AB9AFF" />
                            </svg>
                            <span class="ms-1 text-light-purple">اعضای ابزارکد</span>
                        </div>
                        <div class="mt-2">
                            <h4 class="fw-bolder">تیم حرفه‌ای ما</h4>
                        </div>
                    </div>
                </article>
                <article class="mt-4">
                    <div class="owl-carousel">
                        <!-- profile -->
                        <div class="our-profile">
                            <img src="{{ asset('images/team/niknam2.jpg') }}" alt="team-user-1" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">محمد امیر نیکنام</p>
                                <span>بازاریاب و توسعه دهنده وردپرس</span>
                            </div>
                        </div>
                        <div class="our-profile">
                            <img src="{{ asset('images/team/akbari.HEIC') }}" alt="team-user-2" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">امیر محمد اکبری</p>
                                <span>توسعه دهنده بک اند و وردپرس</span>
                            </div>
                        </div>
                        <div class="our-profile">
                            <img src="{{ asset('images/team/sahebi.jpg') }}" alt="team-user-3" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">محمدرضا صاحبی</p>
                                <span>توسعه دهنده فرانت اند و وردپرس</span>
                            </div>
                        </div>
                        <div class="our-profile">
                            <img src="{{ asset('images/team/ghasanfari.jpg') }}" alt="team-user-4" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">مهدی غضنفری</p>
                                <span>طراح رابط کاربری</span>
                            </div>
                        </div>
                        <div class="our-profile">
                            <img src="{{ asset('images/team/parmis.jpg') }}" alt="team-user-5" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">پارمیس رادمنش</p>
                                <span>تولید محتوا و شبکه های اجتماعی</span>
                            </div>
                        </div>
                        <div class="our-profile">
                            <img src="{{ asset('images/team/arezoo.jpg') }}" alt="team-user-6" class="img-fluid">
                            <div class="our-info text-center">
                                <p class="mb-2">آرزو فرخ نژاد</p>
                                <span>پشتیبانی و فروش</span>
                            </div>
                        </div>

                        <div class="our-profile">
                            <img src="{{ asset('images/team/zal3.jpg') }}" alt="team-user-7" height="100px"  class="img-fluid img-zal">
                            <div class="our-info text-center">
                                <p class="mb-2">محمد یاسین زال</p>
                                <span>دیجیتال مارکتینگ</span>
                            </div>
                        </div>

                        <!-- profile -->

                    </div>
                </article>
            </section>

            <section class="section-property py-4 py-md-5">
                <article>
                    <div class="title-sections">
                        <div>
                            <svg width="37" height="18" viewBox="0 0 37 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="9" width="27.346" height="10.3721" rx="5.18605" fill="#111111" />
                                <rect y="7.1322" width="30.2202" height="10.5771" rx="5.28853" fill="#AB9AFF" />
                            </svg>
                            <span class="ms-1 text-light-purple">اعضای ابزارکد</span>
                        </div>
                        <div class="mt-2">
                            <h4 class="fw-bolder">چرا ابزار کد؟</h4>
                        </div>
                    </div>
                </article>
                <article class="acr-propertys mt-4">
                    <div class="row">
                        <!-- propertys -->
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                            <div class="container-propertys bg-light-orange">
                                <div class="icons-container bg-dark-orange d-flex">
                                    <div class="p-2">
                                        <span class="overla y-top bg-top-orange"></span>
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 8V13" stroke="#292D32" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.9945 16H12.0035" stroke="#292D32" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <span class="overlay-bottom bg-bottom-orange"></span>
                                    </div>
                                    <p class="ms-4 mt-4 mb-0">دلیل انتخاب ما</p>
                                </div>
                                <div class="px-4 py-3">
                                    <h6>چرا ابزارکد را انتخاب کنیم؟</h6>
                                    <p>
                                        ما به هر مشتری به عنوان یک مورد منحصر به فرد نگاه می‌کنیم. وب‌سایت‌های ما به صورت کاملاً سفارشی طراحی می‌شوند تا نیازها و خواسته‌های خاص شما را برآورده کنند.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- propertys -->
                        <!-- propertys -->
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
                            <div class="container-propertys bg-light-purple-two">
                                <div class="icons-container bg-dark-purple d-flex">
                                    <div class="p-2">
                                        <span class="overlay-top bg-top-purple"></span>
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.16 10.87C12.06 10.86 11.94 10.86 11.83 10.87C9.45 10.79 7.56 8.84 7.56 6.44C7.56 3.99 9.54 2 12 2C14.45 2 16.44 3.99 16.44 6.44C16.43 8.84 14.54 10.79 12.16 10.87Z"
                                                    stroke="#292D32" stroke-width="1.95" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                                                    stroke="#292D32" stroke-width="1.95" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <span class="overlay-bottom bg-bottom-purple"></span>
                                    </div>
                                    <p class="ms-4 mt-4 mb-0">مشتریان ما</p>
                                </div>
                                <div class="px-4 py-3">
                                    <h6>تعهد به موفقیت مشتری</h6>
                                    <p>
                                        موفقیت شما موفقیت ماست. ما به شما کمک خواهیم کرد تا اهداف تجاری خود را تحقق بخشید و در دنیای تجارت آنلاین بدرخشید.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- propertys -->
                        <!-- propertys -->
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0 mx-auto">
                            <div class="container-propertys bg-light-pink">
                                <div class="icons-container bg-dark-pink d-flex">
                                    <div class="p-2">
                                        <span class="overlay-top bg-top-pink"></span>
                                        <div>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984"
                                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 6V18" stroke="#292D32" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <span class="overlay-bottom bg-bottom-pink"></span>
                                    </div>
                                    <p class="ms-4 mt-4 mb-0">درآمد ها</p>
                                </div>
                                <div class="px-4 py-3">
                                    <h6>قیمت های رقابتی</h6>
                                    <p>
                                        ما در ابزار کد به دنبال ارائه بهترین کیفیت با مناسب‌ترین قیمت‌ها هستیم. شفافیت در هزینه‌ها و عدم وجود هزینه‌های پنهان از اولویت‌های ماست.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- propertys -->
                    </div>
                </article>
            </section>

            <section class="section-counseling py-4 py-md-5">
                <div class="row">
                    <article class="arc-info-us col-12 col-md-6">
                        <div>
                            <h6 class="mb-4 mt-4">مشاوره رایگان ابزارکد</h6>
                            <p class="m-0">
                                با سلام و احترام،
                                شرکت ابزار کد مفتخر است که به شما عزیزان خدمات مشاوره رایگان در زمینه طراحی وب‌سایت ارائه دهد.
                                هدف ما کمک به شما در درک بهتر نیازها و خواسته‌های دیجیتال شماست تا بتوانید به بهترین شکل ممکن کسب‌وکار خود را آنلاین کنید.
                                در ابزار کد به شما کمک خواهیم کرد تا گام‌های اولیه برای موفقیت آنلاین خود را بردارید. منتظر تماس شما هستیم!
                            </p>
                        </div>
                        <div class="text-end">
                            <img src="../images/Vector 2988.png" alt="">
                        </div>
                    </article>
                    <article class="col-12 col-md-6 mt-4 mt-md-0 px-2 px-md-0">
                        <div>
                            <div class="counseling-txt text-center">
                                <h5 class="d-flex align-items-center">
                                    <svg class="me-2" width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.1 17.4L34.4666 24.3666C33.0666 30.3833 30.3 32.8166 25.1 32.3166C24.2666 32.25 23.3666 32.1 22.4 31.8666L19.6 31.2C12.65 29.55 10.5 26.1166 12.1333 19.15L13.7666 12.1666C14.1 10.75 14.5 9.51664 15 8.49997C16.95 4.46664 20.2666 3.38331 25.8333 4.69997L28.6166 5.34997C35.6 6.98331 37.7333 10.4333 36.1 17.4Z"
                                            stroke="#7F56D9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M25.1 32.3167C24.0667 33.0167 22.7667 33.6 21.1834 34.1167L18.55 34.9833C11.9334 37.1167 8.45002 35.3333 6.30002 28.7167L4.16669 22.1333C2.03335 15.5167 3.80002 12.0167 10.4167 9.88333L13.05 9.01667C13.7334 8.8 14.3834 8.61667 15 8.5C14.5 9.51667 14.1 10.75 13.7667 12.1667L12.1334 19.15C10.5 26.1167 12.65 29.55 19.6 31.2L22.4 31.8667C23.3667 32.1 24.2667 32.25 25.1 32.3167Z"
                                            stroke="#7F56D9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.0667 14.2167L29.15 16.2667" stroke="#7F56D9" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19.4333 20.6667L24.2667 21.9" stroke="#7F56D9" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>فرم درخواست مشاوره</span>
                                </h5>
                                <p class="mt-4">این فیلدها رو تکمیل کنید و برامون بفرستید تا کارشناسان ابزارکد توی
                                    سریع‌ترین زمان
                                    ممکن، برای راهنمایی با شما تماس بگیرن!</p>
                            </div>
                            <div class="request-counseling px-3">
                                <form action="{{ route('customer.about-us.storeConsultation') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="exampleFormControlInput1" class="form-label">نام و نام‌خانوادگی</label>
                                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                                   placeholder="نام خود را وارد کنید ..." value="{{ old('name') }}" required>
                                            @error('name')
                                            <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </span>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="exampleFormControlInput1" class="form-label">شماره تماس</label>
                                            <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1"
                                                   placeholder="شماره تماس خود را وارد کنید..." value="{{ old('mobile') }}" required>
                                            @error('mobile')
                                            <div class="mt-2">
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-5 d-block d-md-flex justify-content-between text-center">
                                        <div></div>
                                        <button type="submit">
                                            <span>
                                                درخواست مشاوره رایگان
                                            </span>
                                            <svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.57 5.93005L3.5 12.0001L9.57 18.0701" stroke="white"
                                                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                <path d="M20.5 12H3.67" stroke="white" stroke-width="1.5"
                                                      stroke-miterlimit="10" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

@endsection
