<header class="border-bottom p-3">
    <section class="header-container row">
        <article class="arc-logo col-8 col-lg-2 order-1 order-lg-0 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center">
                <a href="{{ route('customer.home') }}">
                    <img src="{{ asset('customer-assets/images/logo/Group.png') }}" alt="" class="d-none d-md-block">
                    <img src="{{ asset('customer-assets/images/logo/Group 13.png') }}" alt="" class="d-block d-md-none">
                </a>
            </div>
        </article>
        <article class="arc-tags col-2 col-lg-8 d-flex justify-content-center align-items-center">
            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="d-block d-lg-none" id="btn-show-offcanvas">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M3 12H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M3 17H21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </a>
            <div class="offcanvas offcanvas-start offcanvas-link" id="offcanvasExample">
                <div class="offcanvas-header d-lg-none border-bottom mx-3">
                    <img src="{{ asset('customer-assets/images/logo/Group.png') }}" alt="">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="d-lg-flex d-block justify-content-center w-100 mt-4 mt-lg-0 mx-3 mx-lg-0">
                    @foreach($menus as $menu)
                        <div class="nav-item">
                            <a href="{{ route($menu->url) }}" class="nav-link py-3 py-lg-0">{{ $menu->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </article>
        @auth
            <article class="arc-login col-2 d-flex justify-content-center align-items-center order-2 order-lg-0">
                {{--                <a style="border: none" href="#" class="btn-register">--}}
                {{--                    <i class="fa fa-user" style="font-size: 1.75rem"></i>--}}
                {{--                </a>--}}

                <button class="btn btn-link text-decoration-none text-dark dropdown-toggle profile-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user" style="font-size: 1.5rem"></i>
                </button>
                <section class="dropdown-menu dropdown-menu-end custom-drop-down" aria-labelledby="dropdownMenuButton1">
                    <section><a class="dropdown-item" href="{{ route('customer.profile.showProfile') }}"><i class="fa fa-user-circle"></i> پروفایل کاربری</a></section>
                    <section><a class="dropdown-item" href="{{ route('customer.profile.index') }}"><i class="fa fa-newspaper"></i> تاریخچه سفارشات</a></section>
                    <section><a class="dropdown-item" href="{{ route('customer.profile.showRegisterOrder') }}"><i class="far fa-credit-card"></i> ثبت سفارش</a></section>
                    @if(\Illuminate\Support\Facades\Auth::user()->user_type == 1)
                        <section><a class="dropdown-item" href="{{ route('admin.index') }}"><i class="fas fa-id-card"></i> پنل ادمین</a></section>
                    @endif
                    {{--                    <section><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> لیست علاقه مندی</a></section>--}}
                    <section><hr class="dropdown-divider"></section>
                    <section><a class="dropdown-item" href="{{ route('auth.customer.logout') }}"><i class="fa fa-sign-out-alt"></i> خروج</a></section>

                </section>
            </article>
        @endauth

        {{--        @auth--}}
        {{--            <section class="d-inline px-md-3">--}}
        {{--                --}}
        {{--            </section>--}}
        {{--        @endauth--}}

        @guest
            <article class="arc-login col-2 d-flex justify-content-center align-items-center order-2 order-lg-0">
                <a href="{{ route('auth.customer.login-register-form') }}" class="btn-register">
                    <svg width="35" height="35" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-inline d-lg-none">
                        <circle cx="15" cy="15" r="14.25" stroke="#292D32" stroke-width="1.5" />
                        <path
                            d="M15 15.0002C17.0304 15.0002 18.6764 13.3541 18.6764 11.3237C18.6764 9.29323 17.0304 7.64722 15 7.64722C12.9695 7.64722 11.3235 9.29323 11.3235 11.3237C11.3235 13.3541 12.9695 15.0002 15 15.0002Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M21.3162 22.3529C21.3162 19.5073 18.4853 17.2058 15 17.2058C11.5147 17.2058 8.68384 19.5073 8.68384 22.3529"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="d-none d-lg-inline">
                        ورود/ثبت نام
                    </span>
                </a>
            </article>
        @endguest


    </section>
</header>
