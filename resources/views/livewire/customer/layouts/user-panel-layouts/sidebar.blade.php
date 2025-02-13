
    <section class="container-link shadow">
        <article
            class="arc-logo d-flex justify-content-between align-items-center justify-content-lg-center pe-3 pe-md-0">
            <a href="{{ route('customer.home') }}">
                <img src="{{ asset('customer-assets/images/logo/Group (2).png') }}" alt="" class="full-logo img-fluid">
                <img src="{{ asset('customer-assets/images/logo/Group (3).png') }}" alt="" class="sm-logo img-fluid">
            </a>
            <button type="button" class="btn-close shadow-none d-block d-md-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </article>
        <article class="arc-link">
            <ul class="p-0">
                <li class="nav-link">
                    <a href="{{ route('customer.profile.index') }}" class="link-dashboard">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 7.17647C13 10 12.5 10 8 10C3.5 10 3 10 3 7C3 4 3.5 4 8 4C12.5 4 13 4 13 7.17647Z"
                                  stroke="#292D32" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M11 16.8235C11 14 11.5 14 16 14C20.5 14 21 14 21 17C21 20 20.5 20 16 20C11.5 20 11 20 11 16.8235Z"
                                stroke="#292D32" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 7.17647C21 10 20.6 10 19 10C17.4 10 17 10 17 7C17 4 17.4 4 19 4C20.75 4 21 4 21 7.17647Z"
                                  stroke="#292D32" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 16.8235C3 14 3.4 14 5 14C6.6 14 7 14 7 17C7 20 6.6 20 5 20C3.25 20 3 20 3 16.8235Z"
                                  stroke="#292D32" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>
                پیشخوان
              </span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('customer.profile.showRegisterOrder') }}" class="link-orders">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.38675 7.5C3.13755 7.89058 3 8.33949 3 8.80613V15.1939C3 16.1271 3.55021 16.9895 4.44338 17.4562L10.5566 20.65C11.0032 20.8833 11.5016 21 12 21M3.38675 7.5C3.63595 7.10942 3.99679 6.77717 4.44338 6.54385L10.5566 3.34998C11.4498 2.88334 12.5502 2.88334 13.4434 3.34998L19.5566 6.54385C20.0032 6.77716 20.364 7.10942 20.6132 7.5M3.38675 7.5L10.8423 11.3952C11.5676 11.7741 12.4324 11.7741 13.1577 11.3952L20.6132 7.5M20.6132 7.5C20.8624 7.89058 21 8.33949 21 8.80613V12"
                                stroke="#292D32" stroke-width="1.5" stroke-linecap="round" />
                            <circle cx="17" cy="17" r="4" stroke="#292D32" stroke-width="1.5" />
                            <path d="M15 17H19M17 15V19" stroke="#292D32" stroke-width="1.5"
                                  stroke-linecap="round" />
                        </svg>

                        <span>

                                ثبت سفارش
                            </span>

                    </a>
                </li>
                <li class="nav-link">
                    <a href="#" class="link-support">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5 5.5V18.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                                  stroke-dasharray="2 3" />
                            <path
                                d="M18.5363 5.24115C13.7101 4.91881 10.332 4.91976 5.4667 5.24315C4.28312 5.32182 3.33798 6.04091 3.22849 6.95365C3.19645 7.22072 2.83224 9.48799 3.09813 9.50568C4.41068 9.593 5.44806 10.6764 5.44806 12C5.44806 13.3111 4.43021 14.3865 3.1353 14.4916C2.87936 14.5123 3.22984 16.7446 3.25813 17.0118C3.35657 17.942 4.30935 18.6849 5.5145 18.7642C10.2932 19.0785 13.6673 19.0792 18.5078 18.7627C19.71 18.684 20.6628 17.9451 20.7623 17.0173C20.7909 16.7504 21.1407 14.5122 20.8828 14.4925C19.5824 14.3929 18.5585 13.315 18.5585 12C18.5585 10.6785 19.5925 9.59644 20.9021 9.5061C21.1652 9.48796 20.808 7.23161 20.7773 6.96448C20.6721 6.04691 19.7257 5.32059 18.5363 5.24115Z"
                                stroke="#292D32" stroke-width="1.5" />
                        </svg>
                        <span>

                پشتیبانی <span>(به زودی)</span>
              </span>

                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('customer.profile.showProfile') }}" class="link-edit">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.1378 13.2241C14.7775 13.1049 14.3979 13.0279 14.0032 12.9992C12.6384 12.8997 11.3665 12.8998 9.99904 12.9997C7.60572 13.1745 5.76699 15.12 5.42419 17.5007L5.3586 17.9562C5.16081 19.3298 6.1145 20.6112 7.49126 20.7584C8.55034 20.8716 10.0137 20.9619 11.0893 21.0047M14.1075 18.4885L13.9962 20.3085C13.9889 20.4284 14.0882 20.5277 14.2081 20.5203L16.028 20.4091C16.0584 20.4072 16.0871 20.3943 16.1086 20.3728L19.5342 16.9472C20.0767 16.4047 20.0767 15.525 19.5342 14.9824C18.9916 14.4398 18.1119 14.4398 17.5694 14.9824L14.1438 18.408C14.1223 18.4295 14.1094 18.4581 14.1075 18.4885ZM15.5 6.5C15.5 8.433 13.933 10 12 10C10.067 10 8.5 8.433 8.5 6.5C8.5 4.567 10.067 3 12 3C13.933 3 15.5 4.567 15.5 6.5Z"
                                stroke="#292D32" stroke-width="1.5" />
                        </svg>
                        <span>

                ویرایش‌ حساب
              </span>

                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('auth.customer.logout') }}" class="btn-exit">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.44 14.62L20 12.06L17.44 9.5" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.76001 12.06H19.93" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.76 20C7.34001 20 3.76001 17 3.76001 12C3.76001 7 7.34001 4 11.76 4" stroke="#292D32"
                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>
                خروج
              </span>
                    </a>
                </li>
            </ul>
        </article>
    </section>



    <article class="arc-user-info d-block d-md-none mb-4">
        @php
            $user = auth()->user();
        @endphp
        <p class="m-0">
                <span>
                    @if($user->first_name != null || $user->last_name != null)
                        {{ $user->last_name ?? $user->first_name}}
                    @else
                        کاربر
                    @endif
                </span>
                <span>
                عزیز؛ خوش اومدی 🙌
                </span>
        </p>
</article>
