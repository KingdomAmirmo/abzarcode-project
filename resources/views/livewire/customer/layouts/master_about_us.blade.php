<!doctype html>
<html lang="fa" dir="rtl">
<head>
    @include('livewire.customer.layouts.head-tag-about-us')
    @yield('head-tag')
</head>
<body>

@include('livewire.customer.layouts.header')


@yield('content')

@include('livewire.customer.layouts.footer')

@include('livewire.customer.layouts.script')

<script>
    let btnClose = document.querySelector(".btn-close")
    btnClose.onclick = () => {
        btnClose.style.boxShadow = "none"
    }
</script>
<script>
    let btnShowOffcanvas = document.querySelector("#btn-show-offcanvas")
    let offcanvas = document.querySelector(".offcanvas")

    // btnClose offcanvas
    btnClose.onclick = () => {
        btnClose.style.boxShadow = "none"
        document.getElementsByTagName("html")[0].style.overflow = "auto"
    }

    // overflow of body
    window.onclick = function (event) {
        if (event.target.matches('.offcanvas-backdrop')) {
            document.getElementsByTagName("html")[0].style.overflow = "auto"
        }
    }

    btnShowOffcanvas.addEventListener("click", () => {
        document.getElementsByTagName("html")[0].style.overflow = "hidden"
    })
</script>


@yield('script')



@include('livewire.customer.alerts.sweetalert.error')
@include('livewire.customer.alerts.sweetalert.success')

</body>
</html>
