<div>
    <aside class="sidebar d-flex flex-column position-fixed flex-nowrap p-5">
        <button class="close-sidebar js-close-sidebar position-absolute">
            <svg class="icon icon-close">
                <use xlink:href="#icon-close"></use>
            </svg>
        </button><a class="logo flex-shrink-0" href="{{route('customer.home')}}"><img class="logo-dark" src="{{asset('admin/img/logo-dark.png')}}"><img
                class="logo-light" src="{{asset('admin/img/logo-light.png')}}"></a>
        <div class="nav nav-pills flex-column mb-auto mt-8 menu">
            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{route('admin.index')}}">
                    <svg class="icon icon-double-home icon-item">
                        <use class="fill" href="#icon-home-fill"></use>
                        <use class="stroke" href="#icon-home-stroke"></use>
                    </svg>صفحه اصلی</a></div>
            <div class="nav-item mb-2">
                <div class="nav-link d-flex align-items-center p-3 collapsed" data-bs-target="#sidebar-products-collapse"
                     data-bs-toggle="collapse">
                    <svg class="icon icon-double-diamond icon-item">
                        <use class="fill" href="#icon-diamond-fill"></use>
                        <use class="stroke" href="#icon-diamond-stroke"></use>
                    </svg>محصولات
                    <svg class="icon icon-cheveron me-auto arrow">
                        <use xlink:href="#icon-cheveron"></use>
                    </svg>
                </div>
                <div class="collapse submenu" id="sidebar-products-collapse" data-bs-parent=".sidebar">
                    <div class="wrapper">
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.product.index') }}">مدیریت محصولات
                        </a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.product.dashboard') }}">داشبورد محصولات</a>
                        <a
                            class="nav-link d-flex align-items-center p-3" href="{{ route('admin.product.comment.index') }}">کامنت ها</a>
                        </a>
                    </div>
                </div><a class="btn-plus" href="products-add.html">
                    <svg class="icon icon-min-plus">
                        <use xlink:href="#icon-min-plus"></use>
                    </svg></a>
            </div>



            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{ route('admin.faq.index') }}">
                    <svg class="icon icon-double-promote icon-item">
                        <use class="fill" href="#icon-messages"></use>
                        <use class="stroke" href="#icon-messages"></use>
                    </svg>سوالات متداول</a></div>
            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{ route('admin.product-category.index') }}">
                    <svg class="icon icon-double-promote icon-item">
                        <use class="fill" href="#icon-ticket"></use>
                        <use class="stroke" href="#icon-ticket"></use>
                    </svg>مدیریت دسته بندی</a></div>
            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{ route('admin.menu.index') }}">
                    <svg class="icon icon-double-promote icon-item">
                        <use class="fill" href="#icon-menu"></use>
                        <use class="stroke" href="#icon-menu"></use>
                    </svg>منو سایت</a></div>
            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{ route('admin.blog.index') }}">
                    <svg class="icon icon-double-promote icon-item">
                        <use class="fill" href="#icon-ticket"></use>
                        <use class="stroke" href="#icon-ticket"></use>
                    </svg>مقالات</a></div>
            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="{{ route('admin.setting.index') }}">
                    <svg class="icon icon-double-promote icon-item">
                        <use class="fill" href="#icon-design"></use>
                        <use class="stroke" href="#icon-design"></use>
                    </svg>تنظیمات سایت</a></div>
{{--            <div class="nav-item mb-2"><a class="nav-link d-flex align-items-center p-3" href="about-us.html">--}}
{{--                    <svg class="icon icon-double-promote icon-item">--}}
{{--                        <use class="fill" href="#icon-multiselect"></use>--}}
{{--                        <use class="stroke" href="#icon-multiselect"></use>--}}
{{--                    </svg>درباره ما</a></div>--}}
{{--            </div>--}}

            <div class="nav-item mb-0">
                <div class="nav-link d-flex align-items-center p-3 collapsed" data-bs-target="#sidebar-products-collapse2"
                     data-bs-toggle="collapse">
                    <svg class="icon icon-double-store icon-item">
                        <use class="fill" href="#icon-payment"></use>
                        <use class="stroke" href="#icon-payment"></use>
                    </svg>سفارشات
                    <svg class="icon icon-cheveron me-auto arrow">
                        <use xlink:href="#icon-cheveron"></use>
                    </svg>
                </div>
                <div class="collapse submenu" id="sidebar-products-collapse2" data-bs-parent=".sidebar">
                    <div class="wrapper">
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.all') }}">همه سفارشات</a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.newOrder') }}">سفارش های جدید</a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.visited') }}">سفارش های بررسی شده</a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.approved') }}">سفارش های تایید شده</a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.finished') }}">سفارش های به اتمام رسیده</a>
                        <a class="nav-link d-flex align-items-center p-3"
                           href="{{ route('admin.order.canceled') }}">سفارش های باطل شده</a>
                    </div>
                </div>
                <svg class="icon icon-min-plus">
                    <use xlink:href="#icon-min-plus"></use>
                </svg></a>
            </div>

        <button class="arrow-show js-show-sidebar p-3 mb-3 d-block d-xl-none">
            <svg class="icon icon-arrow">
                <use xlink:href="#icon-arrow"></use>
            </svg>
        </button>
        <div class="border-top bottom pt-4">
            <div class="help-block js-help-sidebar d-flex align-items-center p-3 nav-link">
                <svg class="icon icon-help icon-item">
                    <use xlink:href="#icon-help"></use>
                </svg>راهنما و نحوه استفاده
                <div class="badge purple me-auto d-none d-xl-block">8</div>
            </div>
            <input id="switch-theme-input" type="checkbox">
            <label class="switch-theme js-theme-switch d-flex" for="switch-theme-input">
                <div class="mode-light d-flex flex-fill align-items-center justify-content-center">
                    <div class="theme-icon">
                        <svg class="icon icon-double-sun">
                            <use class="fill" href="#icon-sun-fill"></use>
                            <use class="stroke" href="#icon-sun-stroke"></use>
                        </svg>
                    </div>
                    <div class="theme-text">تم لایت</div>
                </div>
                <div class="mode-dark d-flex flex-fill align-items-center justify-content-center">
                    <div class="theme-icon">
                        <svg class="icon icon-double-moon">
                            <use class="fill" href="#icon-moon-fill"></use>
                            <use class="stroke" href="#icon-moon-stroke"></use>
                        </svg>
                    </div>
                    <div class="theme-text">تم دارک</div>
                </div>
            </label>
        </div>
    </aside></div>
