<!doctype html>
<html lang="fa" dir="rtl">
<head>
    @include('livewire.customer.layouts.user-panel-layouts.head-tag')

    @yield('head-tag')
</head>
<body>

@include('livewire.customer.layouts.user-panel-layouts.header')

<aside class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
       aria-labelledby="offcanvasRightLabel">
@include('livewire.customer.layouts.user-panel-layouts.sidebar')
</aside>


@yield('content')




@include('livewire.customer.layouts.user-panel-layouts.script')




@yield('script')


<section class="toast-wrapper flex-row-reverse">
    @include('livewire.customer.alerts.toast.success')
    @include('livewire.customer.alerts.toast.error')
</section>

@include('livewire.customer.alerts.sweetalert.error')
@include('livewire.customer.alerts.sweetalert.success')

</body>
</html>
