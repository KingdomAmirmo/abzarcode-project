

<div>
    <div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
        <div class="page-head">
            <div class="h3 mb-4 mb-xl-5">داشبورد</div>
        </div>
        <div class="page-body">
            <div class="row g-0">
                <div class="col-lg-8 col-12 ps-lg-2">
                    <div class="card mb-2 p-4 p-sm-5">
                        <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                            <div class="title title-color red">نمای کلی</div>
                            <select class="select select-small">
                                <option value="all" class="text-end">همه</option>
                                <option value="year">در سال</option>
                                <option value="month">در ماه</option>
                            </select>
                        </div>
                        <div class="card-body p-0">
                            <div class="overview js-animate-tabs p-2">
                                <div class="tabs nav flex-nowrap">
                                    <div class="tab d-xs-block d-sm-flex" id="overview-1" data-bs-target="#overview-item-1"
                                         data-bs-toggle="tab">
                                        <div class="overview-icon d-flex justify-content-center align-items-center bg-light-blue">
                                            <svg class="icon icon-shopping-bag-stroke">
                                                <use xlink:href="#icon-shopping-bag-stroke"></use>
                                            </svg>
                                        </div>
                                        <div class="overview-details">
                                            <div class="caption d-flex align-items-center mb-1">مشتریان
                                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Small description">
                                                    <svg class="icon icon-info">
                                                        <use xlink:href="#icon-info"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="h2 counter mb-auto">{{ $users->count() }}</div>
                                        </div>
                                    </div>
                                    <div class="tab d-xs-block d-sm-flex" id="overview-2" data-bs-target="#overview-item-2"
                                         data-bs-toggle="tab">
                                        <div class="overview-icon d-flex justify-content-center align-items-center bg-light-purple">
                                            <svg class="icon icon-activity">
                                                <use xlink:href="#icon-activity"></use>
                                            </svg>
                                        </div>
                                        <div class="overview-details">
                                            <div class="caption d-flex align-items-center mb-1">محصولات
                                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Small description">
                                                    <svg class="icon icon-info">
                                                        <use xlink:href="#icon-info"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="h2 counter mb-auto">{{ $products->count() }}</div>
                                        </div>
                                    </div>
                                    <div class="bg-tab-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 p-4 p-sm-5">
                        <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                            <div class="title title-color green">نمای محصولات</div>
                        </div>
                        <div class="tips">
                            <div class="card-info mb-4">برای محصول بعدی به ایده نیاز دارید؟</div>
                            <div class="tips-list row g-0">
                                <div class="col-12 col-sm-6 pe-lg-2">
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-schedule">
                                                <use xlink:href="#icon-schedule"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">دسترسی سریع</div>
                                            <div class="caption-info d-flex">
                                                <div class="badge min purple ms-1">جدید</div>
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-1.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">مطالعه در 3 دقیقه</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-design">
                                                <use xlink:href="#icon-design"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">دانلود های انحصاری</div>
                                            <div class="caption-info d-flex">
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-2.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">3 دقیقه</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-phone">
                                                <use xlink:href="#icon-phone"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">دستورالعمل استفاده از دارایی</div>
                                            <div class="caption-info d-flex">
                                                <div class="badge min green ms-1">پرطرفدار</div>
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-3.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">زمان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 pe-lg-2">
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">دستورالعمل استفاده از دارایی</div>
                                            <div class="caption-info d-flex">
                                                <div class="badge min green ms-1">برچسب کوچک</div>
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-4.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">زمان</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-video-recorder">
                                                <use xlink:href="#icon-video-recorder"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">پشت صحنه</div>
                                            <div class="caption-info d-flex">
                                                <div class="badge min red ms-1">داغ</div>
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-5.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">3 دقیقه مطالعه کنید</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tips-item d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-video">
                                        <div class="tips-icon d-flex align-items-center justify-content-center ms-3 flex-shrink-0">
                                            <svg class="icon icon-multiselect">
                                                <use xlink:href="#icon-multiselect"></use>
                                            </svg>
                                        </div>
                                        <div class="tips-details flex-shrink-0">
                                            <div class="tips-title mb-2">به روز رسانی زندگی و کار</div>
                                            <div class="caption-info d-flex">
                                                <div class="user d-flex align-items-center">
                                                    <div class="userpic me-1"><img src="{{asset('admin/img/content/user-6.jpg')}}" alt=""></div>
                                                    <div class="time pe-2">3 دقیقه مطالعه کنید</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 p-4 p-sm-5">
                        <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                            <div class="title title-color blue">مشتریان بیشتری بدست آورید!</div>
                        </div>
                        <div class="card-info">50 درصد از مشتریان جدید محصولات را بررسی می کنند زیرا نویسنده کار را در شبکه های اجتماعی به اشتراک می گذارد. درآمد خود را همین حالا به دست آورید! 🔥</div>
                        <div class="mt-4 d-flex mx-n3"><a class="btn-stroke hover-fill w-100 mx-2"
                                                          href="https://www.facebook.com/ui8.net/">
                                <svg class="icon icon-phone me-0 me-sm-2">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>
                                <span class="d-none d-sm-block">تلگرام</span></a><a class="btn-stroke hover-fill w-100 mx-2"
                                                                                          href="https://twitter.com/ui8">

                                <svg class="icon icon-instagram me-0 me-sm-2">
                                    <use xlink:href="#icon-instagram"></use>
                                </svg><span class="d-none d-sm-block">اینستاگرام</span></a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card mb-2 p-4 p-sm-5">
                        <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                            <div class="title title-color blue">آخرین محصولات</div>
                        </div>
                        <div class="popular">
                            <div class="border-bottom d-flex justify-content-between pb-4 mb-4">
                                <div class="caption">محصولات</div>
                                <div class="caption">کسب درآمد</div>
                            </div>
                            <div class="popular-list">
                                @foreach($last_products as $product)
                                    <div class="popular-item mb-3 py-3 d-flex align-items-center" data-bs-toggle="modal"
                                         data-bs-target="#modal-product">
                                        <div class="popular-preview flex-shrink-0 ms-3">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->image }}" />
                                        </div>
                                        <div class="popular-title ps-3">{{ $product->title }}</div>
                                        <div class="popular-details flex-shrink-0 me-auto text-end">
                                            <div class="badge min green-light">وضعیت :{{ $product->status == 1 ? "فعال" : "غیرفعال" }}</div>
                                        </div>
                                    </div>
                                @endforeach

                            </div><a class="btn-stroke w-100" href="{{ route('admin.product.index') }}">همه محصولات</a>
                        </div>
                    </div>
                    <div class="card mb-2 p-4 p-sm-5">
                        <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                            <div class="title title-color yellow">آخرین نظرات</div>
                        </div>
                        <div class="review-card">
                            @foreach($last_comments as $comment)
                                <div class="border-bottom review-item d-flex pb-5 mb-5">
                                    <div class="review-userpic ms-3 flex-shrink-0">
                                        @if($comment->user->profile_photo_path != null)
                                            <img src="{{asset($comment->user->profile_photo_path)}}" alt="user_image">
                                        @else
                                            <img src="{{asset('admin/img/content/user-2.jpg')}}" alt="Ethel">
                                        @endif
                                    </div>
                                    <div class="review-details flex-grow-1">
                                        <div class="review-title d-flex align-items-center">
                                            <div class="user ms-auto">
                                                <span class="name">
                                                    @if($comment->user->first_name != null || $comment->user->last_name != null)
                                                        {{ $comment->user->fullName }}
                                                    @else
                                                        {{ \Illuminate\Support\Str::limit($comment->user->email ?? $comment->user->mobile , 30) }}
                                                    @endif
                                                </span>
{{--                                                <span--}}
{{--                                                    class="login ms-1 text-shades-1">{{ $comment->user->email }}</span>--}}
                                            </div>
                                        </div>
                                        <div class="review-product mb-2 text-shades-1">محصول : <b>{{ $comment->commentable->title }}</b></div>
                                        <div class="review-message mb-4">{{ $comment->body }}</div>
                                    </div>
                                </div>
                            @endforeach

                            <a class="btn-stroke w-100" href="{{ route('admin.product.comment.index') }}">مشاهده همه</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
