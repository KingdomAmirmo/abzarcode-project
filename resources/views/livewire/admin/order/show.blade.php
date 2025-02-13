@extends('livewire.admin.layout.master')


@section('content')


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>فاکتور</h5>
                </section>
                <section class="table-responsive">
                <table class="table table-striped" id="printable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-primary">
                        <th>{{ $order->id }}</th>
                            <td class="width-9-rem text-left">
                                <a href="" id="print" class="btn btn-dark btn-sm text-white"><i class="fa fa-print"></i> چاپ</a>
                                <a href="{{ route('admin.order.all') }}" class="btn bg-yellow btn-sm">بازگشت</a>
                            </td>
                    </tr>
                    <tr class="border-bottom">
                        <th>نام مشتری</th>
                        <td class="text-left font-weight-bolder">
                            {{ $order->user->fullName ?? '---------------' }}</td>
                    </tr>
                    <tr class="border-bottom">
                        <th>توضیحات سفارش</th>
                        <td class="text-left font-weight-bolder">{{ $order->description ?? '---------------' }}</td>
                    </tr>
                    <tr class="border-bottom">
                        <th>موبایل سفارش دهنده</th>
                        <td class="text-left font-weight-bolder">{{ $order->user->mobile ?? '---------------'}}</td>
                    </tr>

                    <tr class="border-bottom">
                        <th>ایمیل سفارش دهنده</th>
                        <td class="text-left font-weight-bolder">{{ $order->user->email ?? '---------------'}}</td>
                    </tr>
                    <tr class="border-bottom">
                        <th>تاریخ ثبت سفارش</th>
                        <td class="text-left font-weight-bolder">{{ jalaiDate($order->created_at)}}</td>
                    </tr>
                    <tr class="border-bottom">
                        <th>وضعیت سفارش</th>
                        <td class="text-left font-weight-bolder">{{ $order->orderStatusValue }}</td>
                    </tr>

                </tbody>
            </table>
    </section>

            </section>
        </section>
    </section>

@endsection


@section('script')

    <script>
        {{--  for Print FactorPage  --}}
        var printBtn = document.getElementById('print');
        printBtn.addEventListener('click', function (){
            printContent('printable');
        })

        function printContent(el){
            var restorePage = $('body').html();
            var printContent = $('#'+ el).clone();
            $('body').empty().html(printContent);
            window.print();
            $('body').html(restorePage);
        }
    </script>

@endsection
