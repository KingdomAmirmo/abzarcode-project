<!doctype html>
<html lang="en" dir="rtl">
<head>
    @include('livewire.customer.layouts.head-tag-simple')
    @yield('head-tag')
</head>
<body>


<main id="main-body-one-col" class="main-body">
    @yield('content')
</main>


@include('livewire.customer.layouts.script')
@yield('script')
<section class="toast-wrapper flex-row-reverse">
    @include('livewire.admin.alerts.toast.success')
    @include('livewire.admin.alerts.toast.error')
</section>

@include('livewire.admin.alerts.sweetalert.error')
@include('livewire.admin.alerts.sweetalert.success')

</body>
</html>
