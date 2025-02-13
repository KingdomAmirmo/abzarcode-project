@extends('livewire.admin.layout.master')


@section('content')



<div class="page overflow-hidden pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">لیست سفارشات</div>
    </div>
    @if(session('success'))
        <div class="alert-blue p-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div
                class="card-head d-flex align-items-start align-items-sm-center justify-content-between flex-column flex-sm-row mb-2 mb-sm-7">
                <div class="title title-color purple ms-5 mb-4 mb-sm-0">سفارشات
                </div>
                <div class="search-input input-group mb-4 mb-sm-0">
                    <button class="input-group-text transparent">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <input class="form-control input-small input-action rounded-2" type="text"
                           placeholder="جستجو بر اساس نام یا ایمیل">
                </div>
            </div>
            <div class="card-body customers-tabs p-0 d-flex align-items-start over-scroll">
                <div class="row g-0 customers-list">
                    <div class="sheet-table d-table white-nowrap">
                        <div class="border-bottom d-table-row">
                            <div class="checkbox-cell d-table-cell py-4 px-1 text-center">
                                #
                            </div>
                            <div class="d-table-cell pb-4 px-2 fw-bold text-center">
                                کد سفارش
                            </div>

                            <div class="d-table-cell pb-4 px-2 caption text-center">وضعیت سفارش</div>
                            <div class="d-table-cell pb-4 px-2 caption text-center">کاربر سفارش دهنده</div>
                            <div class="d-table-cell pb-4 px-2 caption text-center">ایمیل سفارش دهنده</div>
                            <div class="d-table-cell pb-4 px-2 caption text-center">موبایل سفارش دهنده</div>
                            <div class="d-table-cell pb-4 px-2 caption text-center">توضیحات سفارش</div>
                            <div class="d-table-cell pb-4 px-2 caption text-center">تاریخ سفارش</div>
                            <div class="d-table-cell pb-4 px-2 caption">
                                تنظیمات
                            </div>
                            <div class="d-table-cell pb-4 px-2 caption">
                                 وضعیت سفارش
                            </div>
                        </div>

                        @foreach($orders as $order)
                            <div class="border-bottom sheet-row position-relative d-table-row pb-4 mb-4">
                                <div class="d-table-cell py-2 py-md-4 px-3">
                                    {{ $loop->iteration }}
                                </div>
                                <div
                                    class="sheet-cell nav d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ $order->id }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ $order->orderStatusValue }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ $order->user->fullName }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ $order->user->email ?? "-" }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ $order->mobile ?? "-" }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ \Illuminate\Support\Str::limit($order->description, 20) }}
                                </div>
                                <div
                                    class="sheet-cell nav d-table-cell  py-2 py-md-4 px-0 px-md-3 text-center">
                                    {{ jalaiDate($order->created_at) }}
                                </div>

                                <div
                                    class="sheet-cell nav d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3 text-center">
                                    <div class="action-item">
                                        <button class="action-head btn-action-small">
                                            <svg class="icon icon-more-horizontal">
                                                <use xlink:href="#icon-more-horizontal"></use>
                                            </svg>
                                        </button>
                                        <div class="action-body p-3">
                                            <button class="action-item">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                                <a href="{{ route('admin.order.show', $order->id) }}" class="text-blue">نمایش سفارش</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="sheet-cell nav d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3 text-center">
                                    <div class="action-item">
                                        <button class="action-head btn-action-small">
                                            <svg class="icon icon-more-horizontal">
                                                <use xlink:href="#icon-more-horizontal"></use>
                                            </svg>
                                        </button>
                                        <div class="action-body p-3">
                                            <button class="action-item">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                                <a href="{{ route('admin.order.changeStatusToApproved', $order) }}" class="text-blue">تایید شده</a>
                                            </button>
                                            <button class="action-item">
                                                <svg class="icon icon-check">
                                                    <use xlink:href="#icon-check"></use>
                                                </svg>
                                                <a href="{{ route('admin.order.changeStatusToFinished', $order) }}" class="text-blue">اتمام یافته</a>
                                            </button>
                                            <button class="action-item">
                                                <svg class="icon icon-close">
                                                    <use xlink:href="#icon-close"></use>
                                                </svg>
                                                <a href="{{ route('admin.order.changeStatusToCanceled', $order) }}" class="text-blue">باطل شده</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach


                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
</div>


@endsection

