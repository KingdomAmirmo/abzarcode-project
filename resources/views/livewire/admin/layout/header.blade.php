<div>
    <header class="d-flex align-items-center px-xl-7 px-5 py-5">
        <div class="search-header ms-auto">
            <div class="search-action">
                <button class="btn-action">
                    <svg class="icon icon-arrow-left">
                        <use xlink:href="#icon-arrow-left"></use>
                    </svg>
                </button>
            </div>
            <div class="search-input input-group">
                <div class="input-group-text justify-content-center">
                    <button class="btn-search">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <button class="btn-action">
                        <svg class="icon icon-arrow-left">
                            <use xlink:href="#icon-arrow-left"></use>
                        </svg>
                    </button>
                </div>
                <input class="form-control rounded-2" type="text" placeholder="متن مورد نظر خود را تایپ و جستجو کنید"
                       aria-describedby="search-input">
                <div class="input-group-text justify-content-end">
                    <!-- <button class="d-flex align-items-center justify-content-center btn-command"><span class="symbol">⌘</span>F</button> -->
                    <button class="btn-remove">
                        <svg class="icon icon-close-circled">
                            <use xlink:href="#icon-close-circled"></use>
                        </svg>
                    </button>
                </div>
            </div>


            <div class="search-result">
                <div class="group">
                    <div class="category">کپشن کوتاه</div>
                    <div class="list mb-4">
                        <div class="item d-flex py-3"><a class="link d-flex align-items-center flex-fill">
                                <div class="thumb">
                                        <img srcset="{{asset('admin/img/content/image-06@2x.jpg')}} 2x" src="{{asset('admin/img/content/image-06@2x.jpg')}}"
                                        alt="Put your title here" />
                                </div>
                                <div class="description">
                                    <div class="caption">کپشن کوتاه</div>
                                    <div class="group-title">عنوان خود را اینجا قرار دهید</div>
                                </div>
                            </a>
                            <button class="close">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                        </div>



                        <div class="item d-flex py-3"><a class="link d-flex align-items-center flex-fill">
                                <div class="thumb">
                                    <img srcset="{{asset('admin/img/content/image-06@2x.jpg')}} 2x" src="{{asset('admin/img/content/image-06@2x.jpg')}}"
                                         alt="Put your title here" />
                                </div>
                                <div class="description">
                                    <div class="caption">کپشن کوتاه</div>
                                    <div class="group-title">عنوان خود را اینجا قرار دهید</div>
                                </div>
                            </a>
                            <button class="close">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="group">
                    <div class="category">پیشنهادات</div>
                    <div class="list mb-4">
                        <div class="item py-3"><a class="link d-flex align-items-center">
                                <div class="circle-icon d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-photos">
                                        <use xlink:href="#icon-photos"></use>
                                    </svg>
                                </div>
                                <div class="description flex flex-fill">
                                    <div class="group-title">عنوان خود را اینجا قرار دهید</div>
                                    <div class="caption">کپشن کوتاه</div>
                                </div>
                                <button class="arrow">
                                    <svg class="icon icon-forward">
                                        <use xlink:href="#icon-forward"></use>
                                    </svg>
                                </button>
                            </a></div>
                        <div class="item py-3"><a class="link d-flex align-items-center">
                                <div class="circle-icon d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-photos">
                                        <use xlink:href="#icon-photos"></use>
                                    </svg>
                                </div>
                                <div class="description flex flex-fill">
                                    <div class="group-title">عنوان خود را اینجا قرار دهید</div>
                                    <div class="caption">کپشن کوتاه</div>
                                </div>
                                <button class="arrow">
                                    <svg class="icon icon-forward">
                                        <use xlink:href="#icon-forward"></use>
                                    </svg>
                                </button>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar"><a class="btn btn-primary nav-item create" href="{{ route('admin.product.create') }}" role="button">
                <svg class="icon icon-plus me-2">
                    <use xlink:href="#icon-plus"></use>
                </svg><span>اضافه کردن</span></a>
            <div class="nav-item menu-item js-show-sidebar">
                <div class="nav-link d-flex align-items-center justify-content-center">
                    <svg class="icon icon-menu">
                        <use xlink:href="#icon-menu"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-item search-item">
                <div class="nav-link d-flex align-items-center justify-content-center">
                    <svg class="icon icon-search">
                        <use xlink:href="#icon-search"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-item messages-item toggle-item">
                <button class="toggle-head nav-link @if($unseenComments->count() !== 0) active @endif">
                    <svg class="icon icon-double-messages">
                        <use class="fill" href="#icon-messages-fill"></use>
                        <use class="stroke" href="#icon-messages-stroke"></use>
                    </svg>
                </button>
                <div class="toggle-body">
                    <div class="top d-flex align-items-center justify-content-between mb-3">
                        <div class="toggle-title ms-3">پیام ها</div>
                        <div class="action-item">
                            <button class="action-head action-btn">
                                <svg class="icon icon-more-horizontal">
                                    <use xlink:href="#icon-more-horizontal"></use>
                                </svg>
                            </button>
                            <div class="action-body p-3">
                                <form action="{{ route('admin.comment.seenComment') }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="action-item text-dark">
                                        <svg class="icon icon-check">
                                            <use xlink:href="#icon-check"></use>
                                        </svg><span>علامت زدن به عنوان خوانده شده</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                    @forelse($unseenComments as $unseenComment)
                        <div class="message-list mb-4">
                            <a class="item d-flex align-items-center justify-content-start p-3 position-relative" href="">
                                <div class="userpic flex-shrink-0 ms-3 position-relative online">

                                    @if(!empty($unseenComment->user->profile_photo_path))
                                        <img class="w-100" src="{{ asset($unseenComment->user->profile_photo_path) }}" alt="user_img"/>

                                    @else
                                        <img class="w-100" src="{{ asset('admin/img/content/user-2.jpg') }}" alt="user_img"/>
                                    @endif
                                </div>
                                <div class="content w-100">
                                    <div class="item-title mb-1 d-flex align-items-center justify-content-between">
                                        <div class="name">
                                            @if($unseenComment->user->first_name !== null || $unseenComment->user->last_name !== null)
                                                {{ $unseenComment->user->fullName }}
                                            @else
                                                {{ 'میهمان' }}
                                            @endif
                                        </div>
                                        <div class="caption ms-6">{{ jalaiDate($unseenComment->created_at) }}</div>
                                    </div>
                                    <div class="text-shades-2 text-truncate">{{ \Illuminate\Support\Str::limit($unseenComment->body, 75) }}</div>
                                </div>
                            </a>
                        </div>

                    @empty
                        <div class="text-shades-2 text-center mb-2">هیچ نظر خوانده نشده ای وجود ندارد</div>
                    @endforelse


                <a class="btn d-flex mx-3" href="{{ route('admin.product.comment.index') }}">مشاهده پیام ها</a>
                </div>
            </div>


            <div class="nav-item notification-item toggle-item" id="header-notification-toggle">
                <button class="toggle-head nav-link @if($notifications->count() !== 0) active @endif">
                    <svg class="icon icon-double-notification">
                        <use class="fill" href="#icon-notification-fill"></use>
                        <use class="stroke" href="#icon-notification-stroke"></use>
                    </svg>
                </button>
                <div class="toggle-body">
                    <div class="top d-flex align-items-center justify-content-between mb-3">
                        <div class="toggle-title ms-3">اعلان ها</div>
                    </div>



                    @forelse($notifications as $notification)
                        @php
                            $user = \App\Models\User::where('email', $notification['data']['id'])->
                            orWhere('mobile', $notification['data']['id'])->first();
                        @endphp
                        <div class="list-notifications mb-4">
                            <a class="item d-flex align-items-center p-3 position-relative new" href="">
                                <div class="userpic flex-shrink-0 ms-3 position-relative">
                                    <div class="notify-icon d-flex align-items-center justify-content-center start-0 bottom-0 position-absolute blue">
                                        <svg class="icon icon-messages-fill">
                                            <use xlink:href="#icon-messages-fill"></use>
                                        </svg>
                                    </div>
                                    @if(!empty($user->profile_photo_path))
                                        <img class="w-100" src="{{ asset($user->profile_photo_path) }}" alt="user_img"/>
                                    @else
                                        <img class="w-100" src="{{asset('admin/img/content/user-2.jpg')}}" />
                                    @endif
                                </div>
                                <div class="content w-100">
                                    <div class="item-title d-flex align-items-center justify-content-between">
                                        <div class="name ms-1">{{ $notification['data']['message'] }}</div>
                                        <div class="login ms-auto"></div>
                                    </div>
                                    <div class="message">{{ \Illuminate\Support\Str::limit($notification['data']['id'], 30) }}</b>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @empty
                        <div class="text-shades-2 text-center mb-2">هیچ اعلان جدیدی وجود ندارد</div>
                    @endforelse

                </div>
            </div>

            @php
                $user = auth()->user();
            @endphp
            <div class="nav-item user-item toggle-item">
                <div class="toggle-head nav-link">

                    @if($user->profile_photo_path != null)
                        <img srcset="{{ asset($user->profile_photo_path) }}"
                             src="{{ asset($user->profile_photo_path) }}"
                             alt="{{ \Illuminate\Support\Facades\Auth::user()->email }}" />
                    @else
                        <img srcset="{{ asset('admin/img/content/user-1.jpg') }}"
                             src="{{ asset('admin/img/content/user-1.jpg') }}"
                             alt="user_image" />
                    @endif
                </div>
                <div class="toggle-body">
                     <div class="nav">
                        <a class="item" href="{{ route('customer.profile.showProfile') }}">ویرایش پروفایل</a>
                        <a class="item" href="{{ route('auth.customer.logout') }}">خروج</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
