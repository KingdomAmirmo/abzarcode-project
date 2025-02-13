@extends('livewire.customer.layouts.user-panel-layouts.master')

@section('head-tag')
    <title>ابزار کد - پیشخوان</title>
@endsection
@section('content')
    <main>
        <div class="items-container px-4 py-5">
            <article class="arc-title">
                <h4>آخرین سفارشات</h4>
            </article>
            <article class="arc-order mt-5">
                @if($orders->count() != 0)
                    <table class="table-order table">
                        <thead>
                        <tr>
                            <th scope="col">سفارش</th>
                            <th scope="col">تاریخ</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">پلن درخواستی</th>
                        </tr>
                        </thead>
                        <tbody class="border-0 pt-4">


                        @forelse($orders as $order)
                            <tr>
                                <th>
                                    <span>{{ $loop->iteration }}</span>
                                    #
                                </th>
                                <td>{{ jalaiDate($order->created_at) }}</td>
                                <td>
                                    @if($order->order_status == 0)
                                        در انتظار بررسی
                                    @elseif($order->order_status == 1)
                                        بررسی شده
                                    @elseif($order->order_status == 2)
                                        تایید شده
                                    @elseif($order->order_status == 3)
                                        به اتمام رسیده
                                    @elseif($order->order_status == 4)
                                        باطل شده
                                    @else
                                        نامشخض
                                    @endif
                                </td>
                                <td>
                                    @if($order->plan == 1)
                                        وردپرس طلایی
                                    @elseif($order->plan == 2)
                                        وردپرس نقره ای
                                    @elseif($order->plan == 3)
                                        وردپرس برنزی
                                    @elseif($order->plan == 4)
                                        کدنویسی طلایی
                                    @elseif($order->plan == 5)
                                        کدنویسی نقره ای
                                    @elseif($order->plan == 6)
                                        کدنویسی برنزی
                                    @else
                                        نامعنبر
                                    @endif                                </td>
                            </tr>
                        @empty
                            <p>شما هنوز سفارشی ثبت نکردید</p>
                        @endforelse



                        </tbody>
                    </table>
                @else
                    <span>شما هنوز سفارشی ثبت نکردید.</span>
                    <a href="{{ route('customer.profile.showRegisterOrder') }}">ثبت سفارش</a>
                @endif
            </article>
        </div>
    </main>
@endsection
