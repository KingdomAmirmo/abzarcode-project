<header>
    <div class="header-container shadow-sm">
        <article class="arc-profile d-flex justify-content-between align-items-center order-md-2">
            <div>
                <button class="btn shadow-none d-block d-md-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg width="30" height="30"
                                                                                             viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 8.75H26.25" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                        <path d="M3.75 15H26.25" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                        <path d="M3.75 21.25H26.25" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div class="toggle-item me-3 position-relative">
                    <button class="btn-notif">
                        <svg class="svg-notif" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.02 2.90997C8.70997 2.90997 6.01997 5.59997 6.01997 8.90997V11.8C6.01997 12.41 5.75997 13.34 5.44997 13.86L4.29997 15.77C3.58997 16.95 4.07997 18.26 5.37997 18.7C9.68997 20.14 14.34 20.14 18.65 18.7C19.86 18.3 20.39 16.87 19.73 15.77L18.58 13.86C18.28 13.34 18.02 12.41 18.02 11.8V8.90997C18.02 5.60997 15.32 2.90997 12.02 2.90997Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                            <path
                                d="M13.87 3.2C13.56 3.11 13.24 3.04 12.91 3C11.95 2.88 11.03 2.95 10.17 3.2C10.46 2.46 11.18 1.94 12.02 1.94C12.86 1.94 13.58 2.46 13.87 3.2Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M15.02 19.06C15.02 20.71 13.67 22.06 12.02 22.06C11.2 22.06 10.44 21.72 9.90002 21.18C9.36002 20.64 9.02002 19.88 9.02002 19.06"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>
                    </button>


{{--                    <span--}}
{{--                        class="notif-alarm position-absolute top-0 end-50  translate-middle-x p-2 bg-danger border border-light rounded-circle">--}}
{{--                    </span>--}}


                    <div id="myDropdown" class="dropdown-container">
                        <div class="border-bottom pb-3">
                            <p class="mb-0">اعلان ها</p>
                        </div>
                        <div class="my-3">
                            <!-- tickets -->
{{--                            <div class="ticket-container">--}}
{{--                                <div>--}}
{{--                                    <p class="m-0">تیکت پشتیبانی</p>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <!-- <button class="btn-checked">بررسی شده</button> -->--}}
{{--                                    <button class="btn-review">در حال بررسی</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- tickets -->
                            <!-- tickets -->
{{--                            <div class="ticket-container">--}}
{{--                                <div>--}}
{{--                                    <p class="m-0">تیکت پشتیبانی</p>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <button class="btn-checked">بررسی شده</button>--}}
{{--                                    <!-- <button class="btn-review">در حال بررسی</button> -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- tickets -->
                            <!-- no tickets -->
                            <div class="my-4">
                                <p class="m-0 text-muted text-center">اعلان جدیدی وجود ندارد</p>
                            </div>
                            <!-- no tickets -->
                        </div>
                        <div>
                            <a href="#" class="btn-show-notif">مشاهده همه ی اعلان ها</a>
                        </div>
                    </div>
                </div>
                <div>
                    @if(auth()->user()->profile_photo_path != null)
                        <img src="{{ asset(auth()->user()->profile_photo_path) }}" alt="profile_photo" class="img-fluid">
                    @else
                        <img src="{{ asset('images/IMG_20241124_190646_739.png') }}" alt="profile_photo" class="img-fluid p-2" style="background-color: #b8b2b2">
                    @endif
                </div>
            </div>
        </article>
        <article class="arc-user-info d-none d-md-block">
            @php
                $user = auth()->user();
            @endphp

            <p class="m-0">
                <span>
                    @if($user->first_name != null || $user->last_name != null)
                        {{ $user->fullName }}
                    @else
                        کاربر
                    @endif
                </span>
                <span>
                عزیز؛ خوش اومدی 🙌
                </span>
            </p>
        </article>
    </div>
</header>
