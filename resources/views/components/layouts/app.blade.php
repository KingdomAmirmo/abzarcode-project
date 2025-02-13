<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'عنوان صفحه' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('admin/img/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('admin/img/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Core – Dashboard Builder">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Core – Dashboard Builder">
    <meta name="twitter:description" content="Core – Dashboard Builder">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="https://images.ui8.net/uploads/thumbnail_1636636019240.png">
    <meta property="og:title" content="Core – Dashboard Builder">
    <meta property="og:type"
          content="Core is a clean and minimal dashboard UI Kit targeting a wide variety of use cases for desktop, tablet, and mobile applications in awesome light or dark mode 🔥">
    <meta property="og:url" content="https://ui8.net/ui8/products/core-dashboard-builder">
    <meta property="og:image" content="https://images.ui8.net/uploads/thumbnail_1636636019240.png">
    <meta property="og:description" content="Core – Dashboard Builder">
    <meta property="og:site_name" content="Core – Dashboard Builder">
    <meta property="fb:admins" content="132951670226590">
    <link rel="stylesheet" media="all" href="{{asset('admin/css/app.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/sweetalert/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fontawesome/css/all.min.css') }}">

    <script>
        var viewportmeta = document.querySelector('meta[name="viewport"]');
        if (viewportmeta) {
            if (screen.width < 375) {
                var newScale = screen.width / 375;
                viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
            } else {
                viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
            }
        }
    </script>
</head>

<body>
<script>
    if (JSON.parse(localStorage.getItem('darkMode'))) {
        document.body.classList.add("dark");
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('#switch-theme-input').checked = true;
        });
    }
</script>
{{-- header include--}}
<livewire:admin.layout.header />
{{-- sidebar include--}}
<livewire:admin.layout.sidebar />

<main>
    {{$slot}}
</main>
<script src="{{asset('admin/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/lib/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/js/lib/slick.min.js')}}"></script>
<script src="{{asset('admin/js/lib/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('admin/js/lib/moment.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery.daterangepicker.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery.richtext.min.js')}}"></script>
<script src="{{asset('admin/js/lib/jquery.tagify.min.js')}}"></script>
<script src="{{asset('admin/js/lib/wNumb.js')}}"></script>
<script src="{{asset('admin/js/lib/nouislider.min.js')}}"></script>
<script src="{{asset('admin/js/lib/quill.core.js')}}"></script>
<script src="{{asset('admin/js/charts.js')}}"></script>
<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{ asset('admin/sweetalert/sweetalert2.min.js') }}"></script>

{{-- script for read notifications --}}

<script>
    let notificationDropDown = document.getElementById('header-notification-toggle');
    notificationDropDown.addEventListener('click', function (){
        $.ajax({
            type : "POST",
            url : '/admin/notification/read-all',
            data : { _token :  "{{ csrf_token() }}" },
            success : function () {
                console.log('yes');
            }
        })
    });
</script>


@yield('script')

<div style="display: none"><svg width="0" height="0">
        <symbol id="icon-home-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M2.993 9.106A3 3 0 002 11.336V19a3 3 0 003 3h14a3 3 0 003-3v-7.664a3 3 0 00-.993-2.23l-7-6.3a3 3 0 00-4.014 0l-7 6.3zM11 13a2 2 0 00-2 2v4a1 1 0 001 1h4a1 1 0 001-1v-4a2 2 0 00-2-2h-2z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-home-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M5 22a3 3 0 01-3-3v-7.664a3 3 0 01.993-2.23l7-6.3a3 3 0 014.014 0l7 6.3a3 3 0 01.993 2.23V19a3 3 0 01-3 3H5zm15-10.664V19a1 1 0 01-1 1h-3v-5a3 3 0 00-3-3h-2a3 3 0 00-3 3v5H5a1 1 0 01-1-1v-7.664a1 1 0 01.331-.743l7-6.3a1 1 0 011.338 0l7 6.3a1 1 0 01.331.743zM10 20v-5a1 1 0 011-1h2a1 1 0 011 1v5h-4z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-diamond-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M22.16 7.184l-2.927-3.966A3 3 0 0016.819 2H7.18a3 3 0 00-2.414 1.218L1.84 7.184a3 3 0 00.033 3.607L9.62 20.895a3 3 0 004.762 0l7.746-10.104a3 3 0 00.033-3.607zM3.724 8l2.652-3.594A1 1 0 017.181 4h9.638a1 1 0 01.805.406L20.276 8H3.724zm.063 2l7.42 9.678a1 1 0 001.587 0L20.214 10H3.786z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-diamond-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M4.768 3.218l-2.25 3.208A1 1 0 003.337 8h17.327a1 1 0 00.819-1.574l-2.25-3.208A3 3 0 0016.82 2H7.181a3 3 0 00-2.413 1.218zM21.36 11.6a1 1 0 00-.799-1.6H3.44a1 1 0 00-.8 1.6l6.98 9.295a3 3 0 004.761 0l6.98-9.294z" />
        </symbol>
        <symbol id="icon-profile-circled-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12 12a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 100-8 4 4 0 000 8z"
                  clip-rule="evenodd" />
            <path fill-rule="evenodd"
                  d="M18.559 19.549A9.976 9.976 0 0022 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.977 9.977 0 003.441 7.549A9.961 9.961 0 0012 22a9.96 9.96 0 006.559-2.451zm-6.301.447A8.181 8.181 0 0112 20h-.026a7.957 7.957 0 01-3.938-1.05A4.993 4.993 0 0112 17c1.612 0 3.048.763 3.963 1.95a7.957 7.957 0 01-3.705 1.046zm5.304-2.246A6.988 6.988 0 0012 15a6.988 6.988 0 00-5.562 2.75 8 8 0 1111.125 0z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-profile-circled-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-4.286 4.4a.854.854 0 010 1.2A7.976 7.976 0 0112 20a7.976 7.976 0 01-5.714-2.4.854.854 0 010-1.2A7.976 7.976 0 0112 14c2.238 0 4.262.92 5.714 2.4zM12 12a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-store-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.518 2H6.552a3 3 0 00-2.796 1.913L1.968 8.51A2.356 2.356 0 003 11.412V19a3 3 0 003 3h12a3 3 0 003-3v-7.588A2.356 2.356 0 0022.03 8.51l-1.788-4.597A3 3 0 0017.447 2H8.518zM19 11.74a3.924 3.924 0 01-1.299-.388l-.701-.35h-.001l-.642.256a5 5 0 01-3.714 0L11.999 11l-.643.257a5 5 0 01-3.713 0L7 11l-.702.351c-.41.205-.85.335-1.298.388V19a1 1 0 001 1h2v-3a3 3 0 013-3h2a3 3 0 013 3v3h2a1 1 0 001-1V11.74zM17.893 9.21a1.86 1.86 0 00-.045-.022L16.736 4h.711a1 1 0 01.932.638l1.788 4.597a.355.355 0 01-.244.473c-.446.111-.917.06-1.327-.146l-.702-.35zm-2.064.103L14.69 4H13v5.246l.386.154a3 3 0 002.229 0l.216-.086zM11 4H9.307L8.169 9.314l.216.086a3 3 0 002.229 0l.385-.154V4zM6.15 9.19L7.264 4h-.711a1 1 0 00-.932.638L3.832 9.235a.355.355 0 00.244.473c.446.111.917.06 1.328-.146l.701-.35.046-.023zM14 17v3h-4v-3a1 1 0 011-1h2a1 1 0 011 1z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-store-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.518 2h8.929a3 3 0 012.796 1.913l1.788 4.597A2.356 2.356 0 0121 11.412V19a3 3 0 01-3 3H6a3 3 0 01-3-3v-7.588A2.356 2.356 0 011.968 8.51l1.788-4.597A3 3 0 016.552 2h1.966zm9.33 7.19c.016.006.03.014.046.021l.702.351c.41.206.881.257 1.327.146a.355.355 0 00.244-.473L18.38 4.638A1 1 0 0017.447 4h-.71l1.111 5.19zM14.691 4l1.139 5.314-.216.086a3 3 0 01-2.229 0L13 9.246V4h1.692zM9.308 4h1.691v5.246l-.385.154a3 3 0 01-2.229 0l-.216-.086L9.308 4zM7.262 4L6.151 9.19c-.016.006-.03.014-.046.021l-.701.351c-.411.206-.882.257-1.328.146a.355.355 0 01-.244-.473L5.62 4.638A1 1 0 016.552 4h.71zM11 14a2 2 0 00-2 2v3.5a.5.5 0 00.5.5h5a.5.5 0 00.5-.5V16a2 2 0 00-2-2h-2z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-pie-chart-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M9 8.084A6 6 0 1015.916 15H10a1 1 0 01-1-1V8.084zm-3.445-.736A8 8 0 0110 6a1 1 0 011 1v6h6a1 1 0 011 1A8 8 0 115.555 7.348z"
                  clip-rule="evenodd" />
            <path fill-rule="evenodd"
                  d="M13.293 2.293A1 1 0 0114 2a8 8 0 018 8 1 1 0 01-1 1h-7a1 1 0 01-1-1V3a1 1 0 01.293-.707zM15 4.083V9h4.916A6 6 0 0015 4.084z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-pie-chart-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M10 6a8 8 0 108 8 1 1 0 00-1-1h-5a1 1 0 01-1-1V7a1 1 0 00-1-1z" />
            <path d="M14 2a1 1 0 00-1 1v7a1 1 0 001 1h7a1 1 0 001-1 8 8 0 00-8-8z" />
        </symbol>
        <symbol id="icon-promote-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M10.053 2.345a3 3 0 013.892 0l1.271 1.083a1 1 0 00.57.236l1.665.133a3 3 0 012.752 2.752l.133 1.665a1 1 0 00.235.569l1.084 1.271a3 3 0 010 3.892l-1.084 1.271a1 1 0 00-.235.57l-.133 1.665a3 3 0 01-2.752 2.752l-1.665.133a1 1 0 00-.57.235l-1.27 1.084a3 3 0 01-3.893 0l-1.271-1.084a1 1 0 00-.57-.235l-1.664-.133a3 3 0 01-2.752-2.752l-.133-1.665a1 1 0 00-.236-.57l-1.083-1.27a3 3 0 010-3.893l1.083-1.271a1 1 0 00.236-.57l.133-1.664a3 3 0 012.752-2.752l1.665-.133a1 1 0 00.569-.236l1.271-1.083zm2.595 1.522a1 1 0 00-1.297 0L10.079 4.95a3 3 0 01-1.707.707l-1.665.133a1 1 0 00-.918.918l-.132 1.665a3 3 0 01-.708 1.707l-1.083 1.272a1 1 0 000 1.297l1.083 1.271a3 3 0 01.708 1.707l.132 1.666a1 1 0 00.918.917l1.665.133a3 3 0 011.707.707l1.272 1.084a1 1 0 001.297 0l1.271-1.084a3 3 0 011.707-.707l1.666-.133a1 1 0 00.917-.917l.133-1.665a3 3 0 01.707-1.708l1.084-1.271a1 1 0 000-1.297l-1.084-1.272a3 3 0 01-.707-1.707l-.133-1.665a1 1 0 00-.917-.918l-1.666-.133a3 3 0 01-1.707-.707l-1.271-1.083z"
                  clip-rule="evenodd" />
            <path d="M11 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM16 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
            <path fill-rule="evenodd" d="M15.14 8.232a1 1 0 01.128 1.408l-5 6a1 1 0 11-1.536-1.28l5-6a1 1 0 011.408-.128z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-promote-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M10.053 2.344a3 3 0 013.892 0l1.271 1.084a1 1 0 00.57.236l1.665.132a3 3 0 012.752 2.752l.133 1.666a1 1 0 00.235.569l1.084 1.271a3 3 0 010 3.892l-1.084 1.271a1 1 0 00-.235.57l-.133 1.665a3 3 0 01-2.752 2.751l-1.665.133c-.21.017-.41.1-.57.236l-1.27 1.084a3 3 0 01-3.893 0l-1.271-1.084a1.001 1.001 0 00-.57-.236l-1.664-.133a3 3 0 01-2.752-2.751l-.133-1.666a1 1 0 00-.236-.569l-1.083-1.271a3 3 0 010-3.892l1.083-1.271a1 1 0 00.236-.57l.133-1.665a3 3 0 012.752-2.752l1.665-.132a1 1 0 00.569-.236l1.271-1.084zM8.5 10a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm8.5 5.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm-.898-6.86a1 1 0 10-1.536-1.28l-6.667 8a1 1 0 101.536 1.28l6.667-8z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-help" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M12 20a8 8 0 100-16 8 8 0 000 16zm0 2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                  clip-rule="evenodd" />
            <circle cx="12" cy="18" r="1" />
            <path fill-rule="evenodd"
                  d="M12 8c-.87 0-1.612.555-1.887 1.333a1 1 0 11-1.886-.666A4.001 4.001 0 1113 13.874V15a1 1 0 11-2 0v-2a1 1 0 011-1 2 2 0 100-4z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-sun-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M12.5 16a4 4 0 100-8 4 4 0 000 8zm6-4a6 6 0 11-12 0 6 6 0 0112 0zM12.495 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zM12.495 19a1 1 0 011 1v.996a1 1 0 11-2 0V20a1 1 0 011-1zM5.426 4.928a1 1 0 011.414 0l.865.865A1 1 0 116.29 7.207l-.864-.864a1 1 0 010-1.415zM17.293 16.796a1 1 0 011.414 0l.858.858a1 1 0 01-1.414 1.414l-.858-.858a1 1 0 010-1.414zM2.497 11.998a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zM19.496 11.998a1 1 0 011-1h.997a1 1 0 110 2h-.997a1 1 0 01-1-1zM5.426 19.068a1 1 0 010-1.414l.86-.861a1 1 0 011.415 1.414l-.861.861a1 1 0 01-1.414 0zM17.286 7.207a1 1 0 010-1.414l.865-.865a1 1 0 111.414 1.415l-.865.864a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-sun-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M12.5 18a6 6 0 100-12 6 6 0 000 12zM12.495 1.5a1 1 0 011 1v1a1 1 0 01-2 0v-1a1 1 0 011-1zM12.495 19.5a1 1 0 011 1v.997a1 1 0 01-2 0V20.5a1 1 0 011-1zM1.997 11.998a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zM19.997 11.998a1 1 0 011-1h.997a1 1 0 110 2h-.997a1 1 0 01-1-1zM5.072 19.422a1 1 0 010-1.414l.707-.707a1 1 0 011.414 1.414l-.707.707a1 1 0 01-1.414 0zM17.8 6.694a1 1 0 010-1.414l.705-.705a1 1 0 111.414 1.414l-.705.705a1 1 0 01-1.414 0zM5.072 4.575a1 1 0 011.414 0l.707.707A1 1 0 115.78 6.696l-.707-.707a1 1 0 010-1.414zM17.8 17.303a1 1 0 011.414 0l.705.705a1 1 0 11-1.414 1.414l-.705-.705a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-moon-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.066 6.026a7 7 0 109.725 9.725 11.004 11.004 0 01-9.725-9.725zM19 13.816c.866 0 1.612.764 1.27 1.56A9 9 0 118.441 3.547C9.236 3.205 10 3.95 10 4.817a9 9 0 009 9z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-moon-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M20.77 15.375c.342-.795-.404-1.558-1.27-1.558a9 9 0 01-9-9c0-.867-.763-1.612-1.559-1.27A9 9 0 1020.77 15.375z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M13.293 17.793a1 1 0 001.414 1.414l5.793-5.793a2 2 0 000-2.828l-5.793-5.793a1 1 0 10-1.414 1.414L18.086 11H4a1 1 0 100 2h14.086l-4.793 4.793z" />
        </symbol>
        <symbol id="icon-min-plus" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
            <path stroke-linecap="round" stroke-width="2" d="M5 1v8M1 5h8" />
        </symbol>
        <symbol id="icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M18 11a7 7 0 11-14 0 7 7 0 0114 0zm.032 5.618a9 9 0 10-1.414 1.414l2.675 2.675a1 1 0 001.414-1.414l-2.675-2.675z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M10.707 17.793a1 1 0 01-1.414 1.414L3.5 13.414a2 2 0 010-2.828l5.793-5.793a1 1 0 011.414 1.414L5.914 11H20a1 1 0 110 2H5.914l4.793 4.793z" />
        </symbol>
        <symbol id="icon-close-circled" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm-3.707-6.293a1 1 0 010-1.414L10.586 12 8.293 9.707a1 1 0 111.414-1.414L12 10.586l2.293-2.293a1 1 0 111.414 1.414L13.414 12l2.293 2.293a1 1 0 01-1.414 1.414L12 13.414l-2.293 2.293a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M6.707 5.293a1 1 0 00-1.414 1.414L10.586 12l-5.293 5.293a1 1 0 101.414 1.414L12 13.414l5.293 5.293a1 1 0 001.414-1.414L13.414 12l5.293-5.293a1 1 0 10-1.414-1.414L12 10.586 6.707 5.293z" />
        </symbol>
        <symbol id="icon-forward" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.043 19.207a1 1 0 010-1.414L13.836 12 8.043 6.207a1 1 0 011.414-1.414l5.793 5.793a2 2 0 010 2.828l-5.793 5.793a1 1 0 01-1.414 0z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-photos" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M6 6H5a3 3 0 00-3 3v10a3 3 0 003 3h10a3 3 0 003-3v-1h-2v1a1 1 0 01-1 1H5a1 1 0 01-1-1V9a1 1 0 011-1h1V6z" />
            <path fill-rule="evenodd"
                  d="M6 5a3 3 0 013-3h10a3 3 0 013 3v10a3 3 0 01-3 3H9a3 3 0 01-3-3V5zm3-1h10a1 1 0 011 1v10a.995.995 0 01-.205.606c-.03-.04-.063-.08-.1-.12L13.32 8.53a3 3 0 00-4.516.106L8 9.6V5a1 1 0 011-1zm-1 8.724V15a1 1 0 001 1h8.453l-5.608-6.119a1 1 0 00-1.506.036L8 12.724z"
                  clip-rule="evenodd" />
            <circle cx="16.5" cy="7.5" r="1.5" />
        </symbol>
        <symbol id="icon-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M13 5a1 1 0 10-2 0v6H5a1 1 0 100 2h6v6a1 1 0 102 0v-6h6a1 1 0 100-2h-6V5z" />
        </symbol>
        <symbol id="icon-messages-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M7 9a1 1 0 011-1h8a1 1 0 110 2H8a1 1 0 01-1-1zM7 13a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z"
                  clip-rule="evenodd" />
            <path fill-rule="evenodd"
                  d="M6.72 17.464A2 2 0 018 17h11a1 1 0 001-1V6a1 1 0 00-1-1H5a1 1 0 00-1 1v13.73l2.72-2.266zM8 19h11a3 3 0 003-3V6a3 3 0 00-3-3H5a3 3 0 00-3 3v13.73c0 1.696 1.978 2.622 3.28 1.536L8 19z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-messages-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M2 6a3 3 0 013-3h14a3 3 0 013 3v10a3 3 0 01-3 3H8.362a1 1 0 00-.64.232L5.28 21.266C3.978 22.352 2 21.426 2 19.73V6zm5 3a1 1 0 011-1h8a1 1 0 110 2H8a1 1 0 01-1-1zm1 3a1 1 0 100 2h4a1 1 0 100-2H8z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-notification-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M2 16.596c0-.38.155-.745.429-1.01l1.029-.994a2 2 0 00.61-1.444l-.01-3.153A7.97 7.97 0 1120 9.97v3.2a2 2 0 00.586 1.415l1 1a1.414 1.414 0 01-1 2.414H16a4 4 0 01-8 0H3.404A1.404 1.404 0 012 16.596zM10 18a2 2 0 104 0h-4zm8-4.828A4 4 0 0019.172 16H4.879a4 4 0 001.19-2.858l-.01-3.153A5.97 5.97 0 1118 9.97v3.2z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-notification-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M2 16.596c0-.38.155-.745.429-1.01l1.029-.994a2 2 0 00.61-1.444l-.01-3.153A7.97 7.97 0 1120 9.97v3.2a2 2 0 00.586 1.415l1 1a1.414 1.414 0 01-1 2.414H16a4 4 0 01-8 0H3.404A1.404 1.404 0 012 16.596zM10 18a2 2 0 104 0h-4zm8-4.828A4 4 0 0019.172 16H4.879a4 4 0 001.19-2.858l-.01-3.153A5.97 5.97 0 1118 9.97v3.2z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-notification-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M15.357 20.176c.356-.548-.12-1.176-.773-1.176H9.416c-.653 0-1.129.628-.773 1.176A3.997 3.997 0 0012 22a3.997 3.997 0 003.357-1.824zM20.586 17H3.404a1.404 1.404 0 01-.975-2.414l1.028-.994a2 2 0 00.61-1.445l-.006-2.151A7.97 7.97 0 1120 9.97v2.202a2 2 0 00.586 1.414l1 1a1.414 1.414 0 01-1 2.414z" />
        </symbol>
        <symbol id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M4 16a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zM4 8a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-more-horizontal" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25">
            <path
                d="M8 12.01a2 2 0 11-4 0 2 2 0 014 0zM14 12.01a2 2 0 11-4 0 2 2 0 014 0zM20 12.01a2 2 0 11-4 0 2 2 0 014 0z" />
        </symbol>
        <symbol id="icon-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M20.707 6.303a1 1 0 010 1.414l-8.586 8.586a3 3 0 01-4.242 0l-3.586-3.586a1 1 0 111.414-1.414l3.586 3.585a1 1 0 001.414 0l8.586-8.585a1 1 0 011.414 0z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-trash" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M10 10.01a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zM14 10.01a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1z"
                  clip-rule="evenodd" />
            <path fill-rule="evenodd"
                  d="M10 2.01a3 3 0 00-3 3H3a1 1 0 100 2h1v12a3 3 0 003 3h10a3 3 0 003-3v-12h1a1 1 0 100-2h-4a3 3 0 00-3-3h-4zm5 3a1 1 0 00-1-1h-4a1 1 0 00-1 1h6zm-8 2H6v12a1 1 0 001 1h10a1 1 0 001-1v-12H7z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-heart-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M11.8 5.214a5.674 5.674 0 00-8.126 0c-2.232 2.274-2.232 5.954 0 8.228l6.898 7.03a2 2 0 002.856 0l6.898-7.03c2.232-2.274 2.232-5.954 0-8.228a5.674 5.674 0 00-8.126 0 .28.28 0 01-.4 0z" />
        </symbol>
        <symbol id="icon-heart-stroke" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.3727 6.61438C8.91481 5.12854 6.5591 5.12854 5.10121 6.61438C3.63293 8.1108 3.63293 10.5447 5.10121 12.0411L11.2862 18.3447C11.6782 18.7442 12.3218 18.7442 12.7138 18.3447L18.8988 12.0411C20.3671 10.5447 20.3671 8.1108 18.8988 6.61438C17.4409 5.12854 15.0852 5.12854 13.6273 6.61438L12.7138 7.5454C12.5257 7.73706 12.2685 7.84504 12 7.84504C11.7315 7.84504 11.4743 7.73706 11.2862 7.5454L10.3727 6.61438ZM11.8003 5.21366L12 5.41721L12.1997 5.21366C14.4416 2.92878 18.0845 2.92878 20.3264 5.21366C22.5579 7.48794 22.5579 11.1676 20.3264 13.4419L14.1414 19.7454C12.9654 20.944 11.0346 20.944 9.85864 19.7454L3.67364 13.4419C1.44212 11.1676 1.44212 7.48794 3.67364 5.21366C5.91553 2.92878 9.55838 2.92878 11.8003 5.21366Z" />
        </symbol>
        <symbol id="icon-shopping-bag-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M12 2a4 4 0 00-4 4H6.648a3 3 0 00-2.976 2.628l-1.25 10A3 3 0 005.398 22h13.204a3 3 0 002.976-3.372l-1.25-10A3 3 0 0017.352 6H16a4 4 0 00-4-4zm2 4a2 2 0 10-4 0h4z"
                  clip-rule="evenodd" />
        </symbol>
        <symbol id="icon-star-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M10.136 3.843c.623-1.79 3.156-1.79 3.778 0l.946 2.72a2 2 0 001.848 1.343l2.88.06c1.895.038 2.678 2.447 1.167 3.592l-2.295 1.74a2 2 0 00-.706 2.173l.834 2.757c.549 1.815-1.5 3.303-3.057 2.22l-2.364-1.645a2 2 0 00-2.284 0l-2.364 1.645c-1.557 1.084-3.606-.405-3.057-2.22l.834-2.757a2 2 0 00-.706-2.173l-2.295-1.74c-1.51-1.145-.728-3.554 1.168-3.593l2.879-.059A2 2 0 009.19 6.564l.946-2.72z" />
        </symbol>
        <symbol id="icon-bar-chart" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 2.00977C3.55228 2.00977 4 2.45748 4 3.00977V19.0098C4 19.562 4.44772 20.0098 5 20.0098H21C21.5523 20.0098 22 20.4575 22 21.0098C22 21.562 21.5523 22.0098 21 22.0098H5C3.34315 22.0098 2 20.6666 2 19.0098V3.00977C2 2.45748 2.44772 2.00977 3 2.00977Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 8.00977C7.55228 8.00977 8 8.45748 8 9.00977V17.0098C8 17.5621 7.55228 18.0098 7 18.0098C6.44772 18.0098 6 17.5621 6 17.0098V9.00977C6 8.45748 6.44772 8.00977 7 8.00977Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M11 14.0098C11.5523 14.0098 12 14.4575 12 15.0098V17.0098C12 17.5621 11.5523 18.0098 11 18.0098C10.4477 18.0098 10 17.5621 10 17.0098V15.0098C10 14.4575 10.4477 14.0098 11 14.0098Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M15 4.00977C15.5523 4.00977 16 4.45748 16 5.00977V17.0098C16 17.5621 15.5523 18.0098 15 18.0098C14.4477 18.0098 14 17.5621 14 17.0098V5.00977C14 4.45748 14.4477 4.00977 15 4.00977Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19 10.0098C19.5523 10.0098 20 10.4575 20 11.0098V17.0098C20 17.5621 19.5523 18.0098 19 18.0098C18.4477 18.0098 18 17.5621 18 17.0098V11.0098C18 10.4575 18.4477 10.0098 19 10.0098Z" />
        </symbol>
        <symbol id="icon-ticket" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5 6.00977C4.44772 6.00977 4 6.45748 4 7.00977V8.54529C5.19153 9.23407 6 10.5261 6 12.0098C6 13.4934 5.19153 14.7855 4 15.4742V17.0098C4 17.5621 4.44772 18.0098 5 18.0098H19C19.5523 18.0098 20 17.5621 20 17.0098V15.4742C18.8085 14.7855 18 13.4934 18 12.0098C18 10.5261 18.8085 9.23407 20 8.54528V7.00977C20 6.45748 19.5523 6.00977 19 6.00977H5ZM5 4.00977C3.34315 4.00977 2 5.35291 2 7.00977V9.00977C2 9.56205 2.47452 9.98904 2.95897 10.2542C3.57933 10.5938 4 11.2527 4 12.0098C4 12.7669 3.57933 13.4257 2.95897 13.7653C2.47452 14.0305 2 14.4575 2 15.0098V17.0098C2 18.6666 3.34315 20.0098 5 20.0098H19C20.6569 20.0098 22 18.6666 22 17.0098V15.0098C22 14.4575 21.5255 14.0305 21.041 13.7653C20.4207 13.4257 20 12.7669 20 12.0098C20 11.2527 20.4207 10.5938 21.041 10.2542C21.5255 9.98904 22 9.56205 22 9.00977V7.00977C22 5.35291 20.6569 4.00977 19 4.00977H5Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.0009 11.1986C11.7753 11.4253 11.5146 11.6147 11.2293 11.7592C11.3752 12.0439 11.4747 12.3503 11.524 12.6663C11.8398 12.6155 12.162 12.6155 12.4778 12.6663C12.5271 12.3503 12.6267 12.0439 12.7725 11.7592C12.4872 11.6147 12.2266 11.4253 12.0009 11.1986ZM12.9455 8.72733C12.6342 7.83177 11.3677 7.83177 11.0564 8.72733L10.8187 9.41102C10.6814 9.80609 10.3127 10.074 9.89452 10.0825L9.17086 10.0972C8.22293 10.1165 7.83155 11.3211 8.58708 11.8939L9.16387 12.3312C9.49717 12.5839 9.638 13.0173 9.51688 13.4176L9.30728 14.1104C9.03273 15.0179 10.0574 15.7624 10.8356 15.2208L11.4297 14.8074C11.7731 14.5685 12.2288 14.5685 12.5721 14.8074L13.1662 15.2208C13.9445 15.7624 14.9691 15.0179 14.6946 14.1104L14.485 13.4176C14.3638 13.0173 14.5047 12.5839 14.838 12.3312L15.4148 11.8939C16.1703 11.3211 15.7789 10.1165 14.831 10.0972L14.1073 10.0825C13.6892 10.074 13.3205 9.80609 13.1831 9.41102L12.9455 8.72733Z" />
        </symbol>
        <symbol id="icon-grid" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5 2.00977C3.34315 2.00977 2 3.35291 2 5.00977V19.0098C2 20.6666 3.34315 22.0098 5 22.0098H19C20.6569 22.0098 22 20.6666 22 19.0098V5.00977C22 3.35291 20.6569 2.00977 19 2.00977H5ZM14 4.00977H10V8.00977H14V4.00977ZM16 4.00977V8.00977H20V5.00977C20 4.45748 19.5523 4.00977 19 4.00977H16ZM14 10.0098H10V14.0098H14V10.0098ZM16 14.0098V10.0098H20V14.0098H16ZM14 16.0098H10V20.0098H14V16.0098ZM16 20.0098V16.0098H20V19.0098C20 19.562 19.5523 20.0098 19 20.0098H16ZM5 4.00977H8V8.00977H4V5.00977C4 4.45748 4.44771 4.00977 5 4.00977ZM4 10.0098H8V14.0098H4V10.0098ZM4 16.0098H8V20.0098H5C4.44772 20.0098 4 19.562 4 19.0098V16.0098Z" />
        </symbol>
        <symbol id="icon-leaderboard" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M9 7.00977C9 5.9052 9.89543 5.00977 11 5.00977H13C14.1046 5.00977 15 5.9052 15 7.00977V18.0098C15 18.562 14.5523 19.0098 14 19.0098H10C9.44772 19.0098 9 18.562 9 18.0098V7.00977Z" />
            <path
                d="M17 13.0098C17 12.4575 17.4477 12.0098 18 12.0098H20C21.1046 12.0098 22 12.9052 22 14.0098V18.0098C22 18.5621 21.5523 19.0098 21 19.0098H18C17.4477 19.0098 17 18.5621 17 18.0098V13.0098Z" />
            <path
                d="M2 12.0098C2 10.9052 2.89543 10.0098 4 10.0098H6C6.55228 10.0098 7 10.4575 7 11.0098V18.0098C7 18.5621 6.55228 19.0098 6 19.0098H3C2.44772 19.0098 2 18.5621 2 18.0098V12.0098Z" />
        </symbol>
        <symbol id="icon-cheveron" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.29289 17.2929C7.90237 17.6834 7.90237 18.3166 8.29289 18.7071C8.68342 19.0976 9.31658 19.0976 9.70711 18.7071L8.29289 17.2929ZM15 12L15.7071 12.7071C16.0976 12.3166 16.0976 11.6834 15.7071 11.2929L15 12ZM9.70711 5.29289C9.31658 4.90237 8.68342 4.90237 8.29289 5.29289C7.90237 5.68342 7.90237 6.31658 8.29289 6.70711L9.70711 5.29289ZM9.70711 18.7071L15.7071 12.7071L14.2929 11.2929L8.29289 17.2929L9.70711 18.7071ZM15.7071 11.2929L9.70711 5.29289L8.29289 6.70711L14.2929 12.7071L15.7071 11.2929Z" />
        </symbol>
        <symbol id="icon-zap" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.6261 2.52846C12.8389 0.126424 16.7534 2.4893 15.659 5.56644L14.4886 8.85717H18.1525C20.7664 8.85717 22.13 11.9674 20.359 13.8898L13.3742 21.4715C11.1613 23.8736 7.24681 21.5107 8.34127 18.4335L9.51167 15.1429H5.84772C3.23386 15.1429 1.87027 12.0326 3.64131 10.1102L10.6261 2.52846ZM13.7746 4.89623C14.1395 3.87051 12.8346 3.0829 12.097 3.88357L5.11225 11.4653C4.52191 12.1061 4.97643 13.1429 5.84772 13.1429H10.9287C11.2537 13.1429 11.5584 13.3008 11.7458 13.5663C11.9331 13.8318 11.9798 14.1718 11.8709 14.478L10.2256 19.1038C9.86081 20.1295 11.1656 20.9171 11.9033 20.1164L18.888 12.5347C19.4784 11.8939 19.0238 10.8572 18.1525 10.8572H13.0716C12.7466 10.8572 12.4419 10.6993 12.2545 10.4338C12.0672 10.1682 12.0205 9.82824 12.1294 9.52207L13.7746 4.89623Z" />
        </symbol>
        <symbol id="icon-download" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.002 4.99951C13.002 4.44723 12.5543 3.99951 12.002 3.99951C11.4498 3.99951 11.002 4.44723 11.002 4.99951V13.0858L8.20906 10.2928C7.81854 9.90229 7.18537 9.90229 6.79485 10.2928C6.40432 10.6833 6.40432 11.3165 6.79485 11.707L10.5878 15.5C11.3688 16.281 12.6352 16.281 13.4162 15.5L17.2072 11.709C17.5977 11.3185 17.5977 10.6853 17.2072 10.2948C16.8167 9.90425 16.1835 9.90425 15.793 10.2948L13.002 13.0857V4.99951Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4 14C4.55228 14 5 14.4477 5 15V17C5 17.5523 5.44772 18 6 18H18C18.5523 18 19 17.5523 19 17V15C19 14.4477 19.4477 14 20 14C20.5523 14 21 14.4477 21 15V17C21 18.6569 19.6569 20 18 20H6C4.34315 20 3 18.6569 3 17V15C3 14.4477 3.44772 14 4 14Z" />
        </symbol>
        <symbol id="icon-shopping-bag-stroke" width="24" height="24" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.0005 2C9.79141 2 8.00055 3.79086 8.00055 6H6.64888C5.13591 6 3.85971 7.12661 3.67205 8.6279L2.42205 18.6279C2.19823 20.4185 3.59438 22 5.39888 22H18.6022C20.4067 22 21.8028 20.4185 21.579 18.6279L20.329 8.6279C20.1414 7.12661 18.8652 6 17.3522 6H16.0005C16.0005 3.79086 14.2097 2 12.0005 2ZM14.0005 8V9C14.0005 9.55228 14.4483 10 15.0005 10C15.5528 10 16.0005 9.55228 16.0005 9V8H17.3522C17.8565 8 18.2819 8.37554 18.3445 8.87597L19.5945 18.876C19.6691 19.4728 19.2037 20 18.6022 20H5.39888C4.79738 20 4.33199 19.4728 4.4066 18.876L5.6566 8.87597C5.71916 8.37554 6.14456 8 6.64888 8H8.00055V9C8.00055 9.55228 8.44826 10 9.00055 10C9.55283 10 10.0005 9.55228 10.0005 9V8H14.0005ZM14.0005 6C14.0005 4.89543 13.1051 4 12.0005 4C10.896 4 10.0005 4.89543 10.0005 6H14.0005Z" />
        </symbol>
        <symbol id="icon-activity" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.4889 5.05392C9.37598 4.52695 8.62402 4.52694 8.5111 5.05393L7.31658 10.6284C7.02017 12.0116 5.79778 12.9998 4.38317 12.9998H3C2.44772 12.9998 2 12.5521 2 11.9998C2 11.4475 2.44772 10.9998 3 10.9998H4.38317C4.85471 10.9998 5.26217 10.6704 5.36097 10.2093L6.55549 4.63487C7.12011 1.99998 10.8799 1.99995 11.4445 4.63487L14.5111 18.9456C14.624 19.4726 15.376 19.4726 15.4889 18.9456L16.6834 13.3712C16.9798 11.988 18.2022 10.9998 19.6168 10.9998H21C21.5523 10.9998 22 11.4475 22 11.9998C22 12.5521 21.5523 12.9998 21 12.9998H19.6168C19.1453 12.9998 18.7378 13.3292 18.639 13.7902L17.4445 19.3647C16.8799 21.9996 13.1201 21.9996 12.5555 19.3647L9.4889 5.05392Z" />
        </symbol>
        <symbol id="icon-info" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.6673 8.00016C14.6673 11.6821 11.6825 14.6668 8.00065 14.6668C4.31875 14.6668 1.33398 11.6821 1.33398 8.00016C1.33398 4.31826 4.31875 1.3335 8.00065 1.3335C11.6825 1.3335 14.6673 4.31826 14.6673 8.00016ZM8.00065 7.3335C8.36884 7.3335 8.66732 7.63197 8.66732 8.00016V11.3341C8.66732 11.7023 8.36884 12.0008 8.00065 12.0008C7.63246 12.0008 7.33398 11.7023 7.33398 11.3341V8.00016C7.33398 7.63197 7.63246 7.3335 8.00065 7.3335ZM8.00065 6.00016C8.36884 6.00016 8.66732 5.70169 8.66732 5.3335C8.66732 4.96531 8.36884 4.66683 8.00065 4.66683C7.63246 4.66683 7.33398 4.96531 7.33398 5.3335C7.33398 5.70169 7.63246 6.00016 8.00065 6.00016Z" />
        </symbol>
        <symbol id="icon-info-stroke" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.003 1.334a6.67 6.67 0 0 1 6.667 6.667 6.67 6.67 0 0 1-6.667 6.667 6.67 6.67 0 0 1-6.667-6.667 6.67 6.67 0 0 1 6.667-6.667zm0 1.333c-2.945 0-5.333 2.388-5.333 5.333s2.388 5.333 5.333 5.333 5.333-2.388 5.333-5.333-2.388-5.333-5.333-5.333zm0 3.999c.368 0 .667.298.667.667v3.334c0 .368-.298.667-.667.667s-.667-.298-.667-.667V7.333c0-.368.298-.667.667-.667zm0-2c.368 0 .667.298.667.667S8.371 6 8.003 6s-.667-.298-.667-.667.298-.667.667-.667z">
            </path>
        </symbol>
        <symbol id="icon-facebook" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.166 7C13.166 5.89543 14.0614 5 15.166 5H16.166C16.7183 5 17.166 4.55228 17.166 4C17.166 3.44772 16.7183 3 16.166 3H15.166C12.9569 3 11.166 4.79086 11.166 7V9H8.66602C8.11373 9 7.66602 9.44772 7.66602 10C7.66602 10.5523 8.11373 11 8.66602 11H11.166V20C11.166 20.5523 11.6137 21 12.166 21C12.7183 21 13.166 20.5523 13.166 20V11H15.666C16.2183 11 16.666 10.5523 16.666 10C16.666 9.44772 16.2183 9 15.666 9H13.166V7Z" />
        </symbol>
        <symbol id="icon-twitter" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8.9997 21.1C6.5997 21.1 4.0997 20.5 2.0997 19.4C1.6997 19.2 1.4997 18.8 1.5997 18.3C1.6997 17.9 1.9997 17.5 2.4997 17.5C4.1997 17.3 5.4997 17 6.6997 16.4C3.7997 14.2 2.2997 10.2 2.4997 5C2.4997 4.6 2.7997 4.2 3.0997 4.1C3.4997 3.9 3.8997 4 4.1997 4.3C6.1997 6.3 8.5997 8.4 10.8997 8.2C10.8997 7.2 10.9997 5.6 11.8997 4.5C12.6997 3.5 13.8997 3 15.3997 3C17.0997 3 18.1997 4.1 18.7997 4.8L21.0997 4C21.4997 3.9 21.9997 4 22.1997 4.3C22.4997 4.6 22.4997 5.1 22.1997 5.5L20.3997 8.2C20.5997 9.4 20.7997 13 18.0997 16.6C15.8997 19.8 12.3997 21.1 8.9997 21.1ZM6.0997 18.7C9.8997 19.6 14.0997 18.9 16.6997 15.4C19.3997 11.9 18.5997 8.4 18.4997 8.2C18.3997 7.9 18.4997 7.6 18.5997 7.4L18.9997 6.8L18.7997 6.9C18.2997 7.1 17.7997 6.8 17.5997 6.4C17.5997 6.4 16.7997 5 15.4997 5C14.5997 5 13.8997 5.2 13.4997 5.8C12.7997 6.7 12.8997 8.3 12.9997 8.9C13.0997 9.4 12.7997 9.9 12.2997 10C9.3997 11 6.4997 9.1 4.4997 7.4C4.7997 10.6 5.7997 14 8.9997 15.6C9.2997 15.8 9.4997 16.1 9.4997 16.4C9.4997 16.8 9.2997 17.1 8.9997 17.3C8.0997 17.9 7.0997 18.4 6.0997 18.7Z" />
        </symbol>
        <symbol id="icon-pinterest" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.3193 2.0403C14.9805 1.91774 17.7186 2.86647 19.2894 4.88599C23.2876 10.0266 19.4207 16.9999 14 16.9999C12.7127 16.9999 11.7014 16.7172 10.9326 16.2092C10.6371 16.014 10.3892 15.7932 10.1819 15.558L8.41697 21.294C8.25455 21.8219 7.69497 22.1181 7.16711 21.9557C6.63924 21.7933 6.34299 21.2337 6.50541 20.7059L10.5054 7.70586C10.6678 7.178 11.2274 6.88175 11.7553 7.04417C12.2832 7.20659 12.5794 7.76617 12.417 8.29403L11.2058 12.2303C11.2036 12.2458 11.2009 12.2656 11.1981 12.289C11.1888 12.3686 11.1784 12.4884 11.177 12.6342C11.1742 12.933 11.2099 13.3023 11.3396 13.6518C11.4649 13.989 11.6743 14.3022 12.0352 14.5406C12.4014 14.7826 13.0033 14.9999 14 14.9999C17.7154 14.9999 20.7124 9.97323 17.7106 6.11387C16.6407 4.73824 14.6094 3.93695 12.4113 4.03818C10.2374 4.1383 8.08493 5.11705 6.79319 7.05466C5.95325 8.31457 5.87675 9.51723 6.12255 10.4265C6.38508 11.3976 6.96936 11.9313 7.33302 12.0472C7.8592 12.215 8.14973 12.7776 7.98194 13.3038C7.81415 13.8299 7.25158 14.1205 6.7254 13.9527C5.5211 13.5687 4.57136 12.3523 4.19185 10.9484C3.79561 9.48265 3.96906 7.6853 5.12909 5.94526C6.83739 3.38281 9.63398 2.16397 12.3193 2.0403Z" />
        </symbol>
        <symbol id="icon-instagram" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.332 15C13.9889 15 15.332 13.6569 15.332 12C15.332 10.3431 13.9889 9 12.332 9C10.6752 9 9.33203 10.3431 9.33203 12C9.33203 13.6569 10.6752 15 12.332 15ZM12.332 17C15.0935 17 17.332 14.7614 17.332 12C17.332 9.23858 15.0935 7 12.332 7C9.57061 7 7.33203 9.23858 7.33203 12C7.33203 14.7614 9.57061 17 12.332 17Z" />
            <path
                d="M18.332 7C18.332 7.55228 17.8843 8 17.332 8C16.7797 8 16.332 7.55228 16.332 7C16.332 6.44772 16.7797 6 17.332 6C17.8843 6 18.332 6.44772 18.332 7Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16.332 4H8.33203C6.12289 4 4.33203 5.79086 4.33203 8V16C4.33203 18.2091 6.12289 20 8.33203 20H16.332C18.5412 20 20.332 18.2091 20.332 16V8C20.332 5.79086 18.5412 4 16.332 4ZM8.33203 2C5.01832 2 2.33203 4.68629 2.33203 8V16C2.33203 19.3137 5.01832 22 8.33203 22H16.332C19.6457 22 22.332 19.3137 22.332 16V8C22.332 4.68629 19.6457 2 16.332 2H8.33203Z" />
        </symbol>
        <symbol id="icon-help-fill" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17C12.5523 17 13 17.4477 13 18ZM10.1135 9.33325C10.3886 8.5551 11.1307 8 12 8C13.1045 8 14 8.89543 14 10C14 11.1046 13.1045 12 12 12C11.4477 12 11 12.4477 11 13V14.5C11 15.0523 11.4477 15.5 12 15.5C12.5523 15.5 13 15.0523 13 14.5V13.874C14.7252 13.4299 16 11.8638 16 10C16 7.79086 14.2091 6 12 6C10.2568 6 8.77648 7.11451 8.22784 8.66675C8.0438 9.18747 8.31672 9.75879 8.83744 9.94284C9.35815 10.1269 9.92948 9.85396 10.1135 9.33325Z" />
        </symbol>
        <symbol id="icon-arrow-up" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8 1a1 1 0 0 1 .993.883L9 2v9.585l3.293-3.292.094-.081a1 1 0 0 1 1.32 1.495h0v-.001l-4.991 4.993c-.029.03-.061.059-.094.085l-.04.03-.062.041-.027.016-.078.04-.033.014-.067.025-.051.015-.06.015-.053.009-.063.008-.053.003L8 15l-.033-.001-.052-.003L8 15a1.01 1.01 0 0 1-.148-.011l-.054-.01-.058-.013-.052-.016-.069-.025-.033-.015-.07-.035-.039-.023-.063-.042a1.02 1.02 0 0 1-.12-.103l.09.08c-.035-.027-.068-.057-.099-.089L2.293 9.707l-.081-.088a1 1 0 0 1 .522-1.599 1 1 0 0 1 .973.273h0L7 11.585V2a1 1 0 0 1 1-1z" />
        </symbol>
        <symbol id="icon-schedule" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M8 3C8 2.44772 7.55228 2 7 2C6.44772 2 6 2.44772 6 3V4H5C3.34315 4 2 5.34315 2 7V19C2 20.6569 3.34315 22 5 22H13.6822C12.9121 21.488 12.2671 20.8028 11.8027 20H5C4.44772 20 4 19.5523 4 19V7C4 6.44772 4.44772 6 5 6H6V7C6 7.55228 6.44772 8 7 8C7.55228 8 8 7.55228 8 7V6H16V7C16 7.55228 16.4477 8 17 8C17.5523 8 18 7.55228 18 7V6H19C19.5523 6 20 6.44771 20 7V11.8027C20.8028 12.2671 21.488 12.9121 22 13.6822V7C22 5.34315 20.6569 4 19 4H18V3C18 2.44772 17.5523 2 17 2C16.4477 2 16 2.44772 16 3V4H8V3Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 21C19.2091 21 21 19.2091 21 17C21 14.7909 19.2091 13 17 13C14.7909 13 13 14.7909 13 17C13 19.2091 14.7909 21 17 21ZM17 23C20.3137 23 23 20.3137 23 17C23 13.6863 20.3137 11 17 11C13.6863 11 11 13.6863 11 17C11 20.3137 13.6863 23 17 23Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 14C17.5523 14 18 14.4477 18 15V16.5858L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17V15C16 14.4477 16.4477 14 17 14Z" />
        </symbol>
        <symbol id="icon-design" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.7287 5.65712L9.87944 2.80788C8.70786 1.63631 6.80837 1.63631 5.63679 2.80788L2.80837 5.63631C1.63679 6.80788 1.63679 8.70737 2.80837 9.87895L4.21597 11.2865L4.22258 11.2932L4.22926 11.2998L5.65761 12.7282L3.4575 14.9283C3.3179 15.0679 3.22275 15.2457 3.18403 15.4393L2.12337 20.7426C1.98342 21.4423 2.60034 22.0593 3.30007 21.9193L8.60337 20.8586C8.79696 20.8199 8.97476 20.7248 9.11436 20.5852L11.3145 18.385L14.1221 21.1927C15.2936 22.3642 17.1931 22.3642 18.3647 21.1927L21.1931 18.3642C22.3647 17.1927 22.3647 15.2932 21.1931 14.1216L18.3855 11.314L20.9211 8.77845C22.0926 7.60688 22.0927 5.70739 20.9211 4.53581L19.5069 3.1216C18.3353 1.95003 16.4358 1.95003 15.2642 3.1216L12.7287 5.65712ZM4.22258 7.05052C3.83206 7.44104 3.83206 8.07421 4.22258 8.46473L4.92972 9.17187L6.3439 7.75769C6.73443 7.36717 7.36759 7.36717 7.75812 7.75769C8.14864 8.14821 8.14864 8.78138 7.75812 9.1719L6.34394 10.5861L7.07183 11.314L11.3145 7.07134L8.46522 4.22209C8.0747 3.83157 7.44153 3.83157 7.05101 4.22209L4.22258 7.05052ZM16.9713 12.7282L12.7287 16.9708L13.415 17.6571L14.1221 16.95C14.5126 16.5595 15.1458 16.5595 15.5363 16.95C15.9268 17.3406 15.9268 17.9737 15.5363 18.3642L14.8292 19.0713L15.5363 19.7784C15.9268 20.169 16.56 20.169 16.9505 19.7784L19.7789 16.95C20.1695 16.5595 20.1695 15.9263 19.7789 15.5358L16.9713 12.7282ZM19.5069 5.95003L18.0927 4.53581C17.7021 4.14529 17.069 4.14529 16.6784 4.53581L15.2642 5.95005L18.0926 8.77847L19.5069 7.36424C19.8974 6.97372 19.8974 6.34055 19.5069 5.95003ZM5.08581 16.1284L13.85 7.36426L16.6784 10.1927L7.91424 18.9569L4.3787 19.664L5.08581 16.1284Z" />
        </symbol>
        <symbol id="icon-phone" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.32485 6.99841L6.81721 4.94255C6.71469 4.80274 6.52094 4.76711 6.37539 4.86129C4.40296 6.13757 3.86077 8.08717 4.6521 9.52437C5.51752 11.0961 6.85229 13.0237 8.89965 15.0711C10.947 17.1185 12.8746 18.4532 14.4464 19.3187C15.8836 20.11 17.8332 19.5678 19.1095 17.5954C19.2036 17.4498 19.168 17.2561 19.0282 17.1535L16.9723 15.6459C16.67 15.4242 16.2691 15.3902 15.9338 15.5579L15.1143 15.9676C14.4173 16.3161 13.4619 16.4385 12.5575 15.9732C11.9528 15.6622 11.0209 15.071 9.96031 14.0104C8.89976 12.9499 8.30859 12.0179 7.99752 11.4133C7.53222 10.5089 7.65465 9.55342 8.00314 8.85644L8.41287 8.03699C8.58053 7.70167 8.54655 7.30073 8.32485 6.99841ZM5.28888 3.18215C2.74837 4.82601 1.44061 7.83829 2.90011 10.489C3.85264 12.219 5.29947 14.2994 7.48544 16.4853C9.6714 18.6713 11.7518 20.1181 13.4817 21.0706C16.1325 22.5301 19.1447 21.2224 20.7886 18.6819C21.4582 17.647 21.2049 16.2696 20.2109 15.5407L18.1551 14.0331C17.2481 13.368 16.0453 13.266 15.0393 13.769L14.2199 14.1788C13.9827 14.2974 13.7083 14.3161 13.4724 14.1948C13.0428 13.9737 12.2813 13.503 11.3745 12.5962C10.4677 11.6894 9.99701 10.928 9.77596 10.4983C9.65463 10.2625 9.67339 9.98809 9.792 9.75087L10.2017 8.93142C10.7047 7.92545 10.6028 6.72265 9.93766 5.81569L8.43002 3.75982C7.70113 2.76588 6.32371 2.51256 5.28888 3.18215Z" />
        </symbol>
        <symbol id="icon-video-recorder" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 15.4286V16C17 17.6569 15.6569 19 14 19H5C3.34315 19 2 17.6569 2 16V8C2 6.34315 3.34315 5 5 5H14C15.6569 5 17 6.34315 17 8V8.57142L18.8375 7.2589C20.1613 6.31338 22 7.25962 22 8.88637V15.1136C22 16.7404 20.1613 17.6866 18.8375 16.7411L17 15.4286ZM5 7H14C14.5523 7 15 7.44772 15 8V16C15 16.5523 14.5523 17 14 17H5C4.44772 17 4 16.5523 4 16V8C4 7.44772 4.44772 7 5 7ZM17 12.9708L20 15.1136V8.88637L17 11.0292V12.9708Z" />
        </symbol>
        <symbol id="icon-multiselect" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6 6H5C3.34315 6 2 7.34315 2 9V19C2 20.6569 3.34315 22 5 22H15C16.6569 22 18 20.6569 18 19V18H16V19C16 19.5523 15.5523 20 15 20H5C4.44772 20 4 19.5523 4 19V9C4 8.44772 4.44772 8 5 8H6V6Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19 4H9C8.44772 4 8 4.44772 8 5V15C8 15.5523 8.44772 16 9 16H19C19.5523 16 20 15.5523 20 15V5C20 4.44772 19.5523 4 19 4ZM9 2C7.34315 2 6 3.34315 6 5V15C6 16.6569 7.34315 18 9 18H19C20.6569 18 22 16.6569 22 15V5C22 3.34315 20.6569 2 19 2H9Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.7071 7.29289C18.0976 7.68342 18.0976 8.31658 17.7071 8.70711L13.7071 12.7071C13.3166 13.0976 12.6834 13.0976 12.2929 12.7071L10.2929 10.7071C9.90237 10.3166 9.90237 9.68342 10.2929 9.29289C10.6834 8.90237 11.3166 8.90237 11.7071 9.29289L13 10.5858L16.2929 7.29289C16.6834 6.90237 17.3166 6.90237 17.7071 7.29289Z" />
        </symbol>
        <symbol id="icon-link" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 12.01C2 9.24859 4.23858 7.01001 7 7.01001H10C10.5523 7.01001 11 7.45772 11 8.01001C11 8.56229 10.5523 9.01001 10 9.01001H7C5.34315 9.01001 4 10.3532 4 12.01C4 13.6669 5.34315 15.01 7 15.01H10C10.5523 15.01 11 15.4577 11 16.01C11 16.5623 10.5523 17.01 10 17.01H7C4.23858 17.01 2 14.7714 2 12.01Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13 8.01001C13 7.45772 13.4477 7.01001 14 7.01001H17C19.7614 7.01001 22 9.24859 22 12.01C22 14.7714 19.7614 17.01 17 17.01H14C13.4477 17.01 13 16.5623 13 16.01C13 15.4577 13.4477 15.01 14 15.01H17C18.6569 15.01 20 13.6669 20 12.01C20 10.3532 18.6569 9.01001 17 9.01001H14C13.4477 9.01001 13 8.56229 13 8.01001Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8 12.01C8 11.4577 8.44772 11.01 9 11.01H15C15.5523 11.01 16 11.4577 16 12.01C16 12.5623 15.5523 13.01 15 13.01H9C8.44772 13.01 8 12.5623 8 12.01Z" />
        </symbol>
        <symbol id="icon-basket" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.58533 6.99994L9.87822 2.70705C11.0498 1.53548 12.9493 1.53547 14.1209 2.70705L18.4138 6.99994H20.8465C21.4551 6.99994 21.9225 7.53893 21.8365 8.14136L20.3675 18.4242C20.1563 19.9022 18.8906 20.9999 17.3976 20.9999H6.60141C5.10846 20.9999 3.8427 19.9021 3.63156 18.4242L2.16258 8.14136C2.07652 7.53893 2.54398 6.99994 3.15253 6.99994H5.58533ZM11.2924 4.12126C11.683 3.73074 12.3161 3.73074 12.7066 4.12126L15.5853 6.99994L8.41376 6.99994L11.2924 4.12126ZM4.30554 8.99994L5.61146 18.1414C5.68184 18.634 6.10376 18.9999 6.60141 18.9999H17.3976C17.8953 18.9999 18.3172 18.634 18.3876 18.1414L19.6935 8.99994H4.30554Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8 11C8.55228 11 9 11.4477 9 12V16C9 16.5523 8.55228 17 8 17C7.44772 17 7 16.5523 7 16V12C7 11.4477 7.44772 11 8 11Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 11C12.5523 11 13 11.4477 13 12V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V12C11 11.4477 11.4477 11 12 11Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16 11C16.5523 11 17 11.4477 17 12V16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16V12C15 11.4477 15.4477 11 16 11Z" />
        </symbol>
        <symbol id="icon-payment" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2.66675 7C2.66675 5.34315 4.00989 4 5.66675 4H19.6667C21.3236 4 22.6667 5.34315 22.6667 7V17C22.6667 18.6569 21.3236 20 19.6667 20H5.66675C4.00989 20 2.66675 18.6569 2.66675 17V7ZM5.66675 6H19.6667C20.219 6 20.6667 6.44771 20.6667 7V8H4.66675V7C4.66675 6.44772 5.11446 6 5.66675 6ZM4.66675 10V17C4.66675 17.5523 5.11446 18 5.66675 18H19.6667C20.219 18 20.6667 17.5523 20.6667 17V10H4.66675Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.66675 15C6.66675 14.4477 7.11446 14 7.66675 14H13.6667C14.219 14 14.6667 14.4477 14.6667 15C14.6667 15.5523 14.219 16 13.6667 16H7.66675C7.11446 16 6.66675 15.5523 6.66675 15Z" />
        </symbol>
        <symbol id="icon-edit" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.5357 3.80739C15.7073 2.63582 17.6067 2.63582 18.7783 3.80739L20.1925 5.2216C21.3641 6.39318 21.3641 8.29267 20.1925 9.46424L9.80003 19.8568C9.66043 19.9964 9.48263 20.0915 9.28904 20.1302L3.98573 21.1909C3.28601 21.3308 2.66909 20.7139 2.80904 20.0142L3.8697 14.7109C3.90842 14.5173 4.00357 14.3395 4.14317 14.1999L14.5357 3.80739ZM17.3641 5.2216L18.7783 6.63582C19.1688 7.02634 19.1688 7.65951 18.7783 8.05003L17.3641 9.46425L14.5357 6.63582L15.9499 5.2216C16.3404 4.83108 16.9736 4.83108 17.3641 5.2216ZM13.1215 8.05003L5.77148 15.4L5.06437 18.9356L8.59991 18.2284L15.9499 10.8785L13.1215 8.05003Z" />
        </symbol>
        <symbol id="icon-bold" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 6.27273C6 4.46525 7.46525 3 9.27273 3H13C15.7614 3 18 5.23858 18 8C18 9.43071 17.3991 10.7211 16.4359 11.6325C17.9657 12.4875 19 14.123 19 16C19 18.7614 16.7614 21 14 21H9.25C7.45507 21 6 19.5449 6 17.75V6.27273ZM9.27273 5H13C14.6569 5 16 6.34315 16 8C16 9.65685 14.6569 11 13 11H8V6.27273C8 5.56982 8.56982 5 9.27273 5ZM8 13V17.75C8 18.4404 8.55964 19 9.25 19H14C15.6569 19 17 17.6569 17 16C17 14.3431 15.6569 13 14 13H8Z" />
        </symbol>
        <symbol id="icon-italic" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14.0213 3.00024H16.5C17.0523 3.00024 17.5 3.44796 17.5 4.00024C17.5 4.55253 17.0523 5.00024 16.5 5.00024H14.7808L11.2808 19.0002H13C13.5523 19.0002 14 19.448 14 20.0002C14 20.5525 13.5523 21.0002 13 21.0002H10.0221C10.0079 21.0005 9.99368 21.0005 9.97943 21.0002H7.5C6.94772 21.0002 6.5 20.5525 6.5 20.0002C6.5 19.448 6.94772 19.0002 7.5 19.0002H9.21921L12.7192 5.00024H11C10.4477 5.00024 10 4.55253 10 4.00024C10 3.44796 10.4477 3.00024 11 3.00024H13.9772C13.9919 2.99992 14.0065 2.99992 14.0213 3.00024Z" />
        </symbol>
        <symbol id="icon-underline" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5 21C5 20.4477 5.44772 20 6 20H18C18.5523 20 19 20.4477 19 21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 2C6.55228 2 7 2.44772 7 3V11C7 13.7614 9.23858 16 12 16C14.7614 16 17 13.7614 17 11V3C17 2.44772 17.4477 2 18 2C18.5523 2 19 2.44772 19 3V11C19 14.866 15.866 18 12 18C8.13401 18 5 14.866 5 11V3C5 2.44772 5.44772 2 6 2Z" />
        </symbol>
        <symbol id="icon-smile-stroke" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7.0159 13.0839C7.52198 12.8628 8.1115 13.0938 8.33262 13.5999C8.95078 15.0147 10.3615 16.0003 12.0002 16.0003C13.6389 16.0003 15.0497 15.0147 15.6678 13.5999C15.889 13.0938 16.4785 12.8628 16.9846 13.0839C17.4906 13.305 17.7217 13.8945 17.5005 14.4006C16.5756 16.5176 14.4622 18.0003 12.0002 18.0003C9.53829 18.0003 7.42487 16.5176 6.49992 14.4006C6.2788 13.8945 6.50981 13.305 7.0159 13.0839Z" />
            <path
                d="M9 9C9 9.55228 8.55228 10 8 10C7.44772 10 7 9.55228 7 9C7 8.44772 7.44772 8 8 8C8.55228 8 9 8.44772 9 9Z" />
            <path
                d="M17 9C17 9.55228 16.5523 10 16 10C15.4477 10 15 9.55228 15 9C15 8.44772 15.4477 8 16 8C16.5523 8 17 8.44772 17 9Z" />
        </symbol>
        <symbol id="icon-smile-fill" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM8.33238 13.5996C8.11126 13.0935 7.52174 12.8625 7.01565 13.0837C6.50957 13.3048 6.27855 13.8943 6.49967 14.4004C7.42463 16.5174 9.53804 18 12 18C14.4619 18 16.5753 16.5174 17.5003 14.4004C17.7214 13.8943 17.4904 13.3048 16.9843 13.0837C16.4782 12.8625 15.8887 13.0935 15.6676 13.5996C15.0494 15.0145 13.6387 16 12 16C10.3613 16 8.95054 15.0145 8.33238 13.5996ZM9 9C9 9.55228 8.55228 10 8 10C7.44772 10 7 9.55228 7 9C7 8.44772 7.44772 8 8 8C8.55228 8 9 8.44772 9 9ZM16 10C16.5523 10 17 9.55228 17 9C17 8.44772 16.5523 8 16 8C15.4477 8 15 8.44772 15 9C15 9.55228 15.4477 10 16 10Z" />
        </symbol>
        <symbol id="icon-list" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 7C7 6.44772 7.44772 6 8 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H8C7.44772 8 7 7.55228 7 7Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 12C7 11.4477 7.44772 11 8 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H8C7.44772 13 7 12.5523 7 12Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 17C7 16.4477 7.44772 16 8 16H20C20.5523 16 21 16.4477 21 17C21 17.5523 20.5523 18 20 18H8C7.44772 18 7 17.5523 7 17Z" />
            <path
                d="M5 7C5 7.55228 4.55228 8 4 8C3.44772 8 3 7.55228 3 7C3 6.44772 3.44772 6 4 6C4.55228 6 5 6.44772 5 7Z" />
            <path
                d="M5 12C5 12.5523 4.55228 13 4 13C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11C4.55228 11 5 11.4477 5 12Z" />
            <path
                d="M5 17C5 17.5523 4.55228 18 4 18C3.44772 18 3 17.5523 3 17C3 16.4477 3.44772 16 4 16C4.55228 16 5 16.4477 5 17Z" />
        </symbol>
        <symbol id="icon-align" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 6C3 5.44772 3.44772 5 4 5H20C20.5523 5 21 5.44772 21 6C21 6.55228 20.5523 7 20 7H4C3.44772 7 3 6.55228 3 6Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 10C6 9.44772 6.44772 9 7 9H17C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H7C6.44772 11 6 10.5523 6 10Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 14C3 13.4477 3.44772 13 4 13H20C20.5523 13 21 13.4477 21 14C21 14.5523 20.5523 15 20 15H4C3.44772 15 3 14.5523 3 14Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 18C6 17.4477 6.44772 17 7 17H17C17.5523 17 18 17.4477 18 18C18 18.5523 17.5523 19 17 19H7C6.44772 19 6 18.5523 6 18Z" />
        </symbol>
        <symbol id="icon-upload" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M17.7072 9.29099C18.0977 9.68151 18.0977 10.3147 17.7072 10.7052C17.3167 11.0957 16.6835 11.0957 16.293 10.7052L13.502 7.91426V15.0005C13.502 15.5528 13.0543 16.0005 12.502 16.0005C11.9498 16.0005 11.502 15.5528 11.502 15.0005V7.91417L8.70906 10.7072C8.31854 11.0977 7.68537 11.0977 7.29485 10.7072C6.90432 10.3166 6.90432 9.68347 7.29485 9.29294L11.7949 4.79289C11.9824 4.60536 12.2368 4.5 12.502 4.5C12.7672 4.5 13.0216 4.60536 13.2091 4.79289L17.7072 9.29099Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.5 14C5.05228 14 5.5 14.4477 5.5 15V17C5.5 17.5523 5.94772 18 6.5 18H18.5C19.0523 18 19.5 17.5523 19.5 17V15C19.5 14.4477 19.9477 14 20.5 14C21.0523 14 21.5 14.4477 21.5 15V17C21.5 18.6569 20.1569 20 18.5 20H6.5C4.84315 20 3.5 18.6569 3.5 17V15C3.5 14.4477 3.94772 14 4.5 14Z" />
        </symbol>
        <symbol id="icon-expand" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 5C2 3.34315 3.34315 2 5 2H7C7.55228 2 8 2.44772 8 3C8 3.55228 7.55228 4 7 4H5C4.44772 4 4 4.44772 4 5V7C4 7.55228 3.55228 8 3 8C2.44772 8 2 7.55228 2 7V5Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 19C2 20.6569 3.34315 22 5 22H7C7.55228 22 8 21.5523 8 21C8 20.4477 7.55228 20 7 20H5C4.44772 20 4 19.5523 4 19V17C4 16.4477 3.55228 16 3 16C2.44772 16 2 16.4477 2 17V19Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 19C22 20.6569 20.6569 22 19 22H17C16.4477 22 16 21.5523 16 21C16 20.4477 16.4477 20 17 20H19C19.5523 20 20 19.5523 20 19V17C20 16.4477 20.4477 16 21 16C21.5523 16 22 16.4477 22 17V19Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 5C22 3.34315 20.6569 2 19 2H17C16.4477 2 16 2.44772 16 3C16 3.55228 16.4477 4 17 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 20.4477 8 21 8C21.5523 8 22 7.55228 22 7V5Z" />
        </symbol>
        <symbol id="icon-check-all" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.9499 13.4643L16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289C16.3166 6.90237 15.6834 6.90237 15.2929 7.29289L10.5357 12.0501L11.9499 13.4643Z" />
            <path
                d="M8.29369 16.8792L6.30684 14.8924C6.30216 14.8879 6.29751 14.8833 6.29289 14.8787L3.70711 12.2929C3.31658 11.9024 2.68342 11.9024 2.29289 12.2929C1.90237 12.6834 1.90237 13.3166 2.29289 13.7071L4.87868 16.2929C5.80237 17.2166 7.17853 17.412 8.29369 16.8792Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M21.7073 7.24309C22.0978 7.63361 22.0978 8.26678 21.7073 8.6573L14.0715 16.2931C12.8999 17.4646 11.0004 17.4647 9.82888 16.2931L7.24309 13.7073C6.85256 13.3168 6.85256 12.6836 7.24309 12.2931C7.63361 11.9026 8.26678 11.9026 8.6573 12.2931L11.2431 14.8789C11.6336 15.2694 12.2668 15.2694 12.6573 14.8789L20.2931 7.24309C20.6836 6.85256 21.3168 6.85256 21.7073 7.24309Z" />
        </symbol>
        <symbol id="icon-more-vertical" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14 6C14 7.10457 13.1046 8 12 8C10.8954 8 10 7.10457 10 6C10 4.89543 10.8954 4 12 4C13.1046 4 14 4.89543 14 6Z" />
            <path
                d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" />
            <path
                d="M14 18C14 19.1046 13.1046 20 12 20C10.8954 20 10 19.1046 10 18C10 16.8954 10.8954 16 12 16C13.1046 16 14 16.8954 14 18Z" />
        </symbol>
        <symbol id="icon-calendar" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 2C7.55228 2 8 2.44772 8 3V4H16V3C16 2.44772 16.4477 2 17 2C17.5523 2 18 2.44772 18 3V4H19C20.6569 4 22 5.34315 22 7V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V7C2 5.34315 3.34315 4 5 4H6V3C6 2.44772 6.44772 2 7 2ZM16 6V7C16 7.55228 16.4477 8 17 8C17.5523 8 18 7.55228 18 7V6H19C19.5523 6 20 6.44771 20 7V10H4V7C4 6.44772 4.44772 6 5 6H6V7C6 7.55228 6.44772 8 7 8C7.55228 8 8 7.55228 8 7V6H16ZM4 12V19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V12H4Z" />
        </symbol>
        <symbol id="icon-clock" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 6C12.5523 6 13 6.44772 13 7V11.5858L15.2071 13.7929C15.5976 14.1834 15.5976 14.8166 15.2071 15.2071C14.8166 15.5976 14.1834 15.5976 13.7929 15.2071L11.5858 13C11.2107 12.6249 11 12.1162 11 11.5858V7C11 6.44772 11.4477 6 12 6Z" />
        </symbol>
        <symbol id="icon-star-stroke" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.9452 7.22016L11.9997 4.5L11.0541 7.22016C10.5048 8.80044 9.03005 9.87192 7.35737 9.90601L4.47816 9.96468L6.773 11.7045C8.1062 12.7153 8.66951 14.449 8.18504 16.0503L7.35112 18.8067L9.71493 17.1618C11.0882 16.2062 12.9111 16.2062 14.2844 17.1618L16.6482 18.8067L15.8143 16.0503C15.3298 14.449 15.8931 12.7153 17.2263 11.7045L19.5211 9.96468L16.6419 9.90601C14.9693 9.87192 13.4945 8.80044 12.9452 7.22016ZM13.8888 3.84334C13.2662 2.05222 10.7331 2.05222 10.1105 3.84334L9.165 6.5635C8.89035 7.35364 8.15296 7.88938 7.31662 7.90642L4.43741 7.9651C2.54157 8.00373 1.75881 10.4128 3.26987 11.5584L5.56471 13.2983C6.23131 13.8036 6.51296 14.6705 6.27073 15.4712L5.43681 18.2276C4.8877 20.0426 6.937 21.5315 8.49348 20.4484L10.8573 18.8035C11.5439 18.3257 12.4554 18.3257 13.142 18.8035L15.5058 20.4484C17.0623 21.5315 19.1116 20.0426 18.5625 18.2276L17.7286 15.4712C17.4863 14.6705 17.768 13.8036 18.4346 13.2983L20.7294 11.5584C22.2405 10.4128 21.4577 8.00373 19.5619 7.9651L16.6827 7.90642C15.8463 7.88938 15.109 7.35364 14.8343 6.5635L13.8888 3.84334Z" />
        </symbol>
        <symbol id="icon-share" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.1636 7.13574C13.3581 7.79383 13.7174 8.38122 14.1935 8.85018L10.8366 10.8644C10.6421 10.2063 10.2828 9.61889 9.80664 9.14994L13.1636 7.13574Z" />
            <path
                d="M9.80664 14.8502L13.1636 16.8643C13.3581 16.2063 13.7173 15.6189 14.1935 15.1499L10.8366 13.1357C10.6421 13.7938 10.2828 14.3812 9.80664 14.8502Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 8C18.1046 8 19 7.10457 19 6C19 4.89543 18.1046 4 17 4C15.8954 4 15 4.89543 15 6C15 7.10457 15.8954 8 17 8ZM21 6C21 8.20914 19.2091 10 17 10C14.7909 10 13 8.20914 13 6C13 3.79086 14.7909 2 17 2C19.2091 2 21 3.79086 21 6Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20ZM21 18C21 20.2091 19.2091 22 17 22C14.7909 22 13 20.2091 13 18C13 15.7909 14.7909 14 17 14C19.2091 14 21 15.7909 21 18Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 14C8.10457 14 9 13.1046 9 12C9 10.8954 8.10457 10 7 10C5.89543 10 5 10.8954 5 12C5 13.1046 5.89543 14 7 14ZM11 12C11 14.2091 9.20914 16 7 16C4.79086 16 3 14.2091 3 12C3 9.79086 4.79086 8 7 8C9.20914 8 11 9.79086 11 12Z" />
        </symbol>
        <symbol id="icon-repeat" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M16.2071 2.7929C15.8166 2.40237 15.1834 2.40237 14.7929 2.79289C14.4024 3.18341 14.4024 3.81658 14.7929 4.2071L15.5819 4.99615H10C6.13401 4.99615 3 8.13016 3 11.9962V12.9962C3 13.5484 3.44772 13.9962 4 13.9962C4.55228 13.9962 5 13.5484 5 12.9962V11.9962C5 9.23473 7.23858 6.99615 10 6.99615H15.5866L14.7929 7.78992C14.4024 8.18045 14.4024 8.81362 14.7929 9.20414C15.1834 9.59466 15.8166 9.59465 16.2071 9.20412L18.352 7.05916C18.9378 6.47337 18.9378 5.52363 18.352 4.93785L16.2071 2.7929Z" />
            <path
                d="M13.9984 19C17.8644 19 20.9984 15.866 20.9984 12V11C20.9984 10.4477 20.5507 10 19.9984 10C19.4461 10 18.9984 10.4477 18.9984 11V12C18.9984 14.7614 16.7598 17 13.9984 17H8.4117L9.20552 16.2062C9.59604 15.8156 9.59603 15.1825 9.2055 14.792C8.81498 14.4014 8.18181 14.4014 7.79129 14.792L5.64636 16.9369C5.06059 17.5227 5.06059 18.4725 5.64636 19.0582L7.79129 21.2032C8.18181 21.5937 8.81498 21.5937 9.20551 21.2032C9.59603 20.8127 9.59604 20.1795 9.20551 19.789L8.41653 19H13.9984Z" />
        </symbol>
        <symbol id="icon-mobile" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9 4H8C7.44771 4 7 4.44772 7 5V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V5C17 4.44772 16.5523 4 16 4H15C15 4.82843 14.3284 5.5 13.5 5.5H10.5C9.67157 5.5 9 4.82843 9 4ZM16 2C17.6569 2 19 3.34315 19 5V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V5C5 3.34315 6.34315 2 8 2H16Z" />
        </symbol>
        <symbol id="icon-tablet" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M18 4H6C5.44771 4 5 4.44772 5 5V19C5 19.5523 5.44772 20 6 20H18C18.5523 20 19 19.5523 19 19V5C19 4.44772 18.5523 4 18 4ZM6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V5C21 3.34315 19.6569 2 18 2H6Z" />
            <path
                d="M13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17C12.5523 17 13 17.4477 13 18Z" />
        </symbol>
        <symbol id="icon-laptop" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19 5H5C4.44772 5 4 5.44772 4 6V15C4 15.5523 4.44772 16 5 16H19C19.5523 16 20 15.5523 20 15V6C20 5.44771 19.5523 5 19 5ZM5 3C3.34315 3 2 4.34315 2 6V15C2 16.6569 3.34315 18 5 18H19C20.6569 18 22 16.6569 22 15V6C22 4.34315 20.6569 3 19 3H5Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1 20C1 19.4477 1.44772 19 2 19H22C22.5523 19 23 19.4477 23 20C23 20.5523 22.5523 21 22 21H2C1.44772 21 1 20.5523 1 20Z" />
        </symbol>
        <symbol id="icon-filter" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.2356 10.9274C10.7182 11.3065 11 11.8863 11 12.5V19.1761L13 18.4724V12.5C13 11.8863 13.2818 11.3065 13.7644 10.9274L19.6178 6.32821C19.8591 6.13863 20 5.84875 20 5.54189V4H4V5.54189C4 5.84876 4.14089 6.13863 4.38218 6.32821L10.2356 10.9274ZM20.8535 7.90085L15 12.5V19.1806C15 19.605 14.7322 19.9831 14.3319 20.124L10.3319 21.5314C9.68145 21.7602 9 21.2776 9 20.5881V12.5L3.14654 7.90085C2.42266 7.33209 2 6.46248 2 5.54189V4C2 2.89543 2.89543 2 4 2H20C21.1046 2 22 2.89543 22 4V5.54189C22 6.46248 21.5773 7.33209 20.8535 7.90085Z" />
        </symbol>
        <symbol id="icon-mail" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5 6H19C19.3862 6 19.7213 6.21897 19.8879 6.53954L12.5547 11.4283C12.2188 11.6523 11.7812 11.6523 11.4453 11.4283L4.11209 6.53953C4.27868 6.21896 4.61377 6 5 6ZM4 8.8685V17C4 17.5523 4.44772 18 5 18H19C19.5523 18 20 17.5523 20 17V8.86852L13.6641 13.0924C12.6564 13.7642 11.3436 13.7642 10.3359 13.0924L4 8.8685ZM2 7C2 5.34315 3.34315 4 5 4H19C20.6569 4 22 5.34315 22 7V17C22 18.6569 20.6569 20 19 20H5C3.34315 20 2 18.6569 2 17V7Z" />
        </symbol>
        <symbol id="icon-donut-chart" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.66663 6.29166C8.99971 6.4905 8.36256 6.78874 7.77764 7.17958C6.62649 7.94875 5.72929 9.042 5.19947 10.3211C4.66966 11.6002 4.53104 13.0076 4.80113 14.3655C5.07123 15.7234 5.73791 16.9706 6.71688 17.9496C7.69585 18.9286 8.94313 19.5953 10.301 19.8654C11.6589 20.1355 13.0663 19.9968 14.3454 19.467C15.6245 18.9372 16.7177 18.04 17.4869 16.8889C17.8778 16.3039 18.176 15.6668 18.3748 14.9999H16.2578C16.1395 15.2716 15.9967 15.5334 15.8305 15.7821C15.2803 16.6056 14.4981 17.2475 13.5831 17.6266C12.668 18.0056 11.6611 18.1048 10.6896 17.9115C9.7182 17.7183 8.82588 17.2413 8.12551 16.541C7.42515 15.8406 6.94819 14.9483 6.75496 13.9769C6.56173 13.0054 6.6609 11.9985 7.03994 11.0834C7.41897 10.1684 8.06085 9.38623 8.88439 8.83596C9.13306 8.6698 9.39494 8.52703 9.66663 8.40868V6.29166ZM10.6687 4.05536C11.2176 3.99412 11.6666 4.44758 11.6666 4.99987V8.99197C11.6666 9.54426 11.207 9.97643 10.6849 10.1567C10.4427 10.2403 10.2109 10.355 9.99553 10.4989C9.50089 10.8294 9.11536 11.2992 8.8877 11.8488C8.66004 12.3984 8.60047 13.0032 8.71653 13.5867C8.83259 14.1702 9.11907 14.7061 9.53973 15.1268C9.96039 15.5474 10.4963 15.8339 11.0798 15.95C11.6633 16.066 12.2681 16.0065 12.8177 15.7788C13.3673 15.5511 13.8371 15.1656 14.1676 14.671C14.3115 14.4556 14.4262 14.2238 14.5098 13.9816C14.6901 13.4595 15.1222 12.9999 15.6745 12.9999H19.6666C20.2189 12.9999 20.6724 13.4489 20.6111 13.9978C20.4519 15.4248 19.9529 16.7981 19.1499 18C18.1609 19.48 16.7553 20.6336 15.1108 21.3148C13.4662 21.996 11.6566 22.1742 9.91082 21.8269C8.16499 21.4797 6.56134 20.6225 5.30267 19.3638C4.044 18.1052 3.18683 16.5015 2.83956 14.7557C2.4923 13.0099 2.67053 11.2003 3.35171 9.55572C4.0329 7.91118 5.18646 6.50557 6.6665 5.51664C7.86837 4.71357 9.2417 4.21457 10.6687 4.05536Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M20.3748 8.99986C20.3063 8.77004 20.2259 8.54347 20.1338 8.32108C19.782 7.4718 19.2664 6.70012 18.6164 6.05011C17.9664 5.4001 17.1947 4.88449 16.3454 4.5327C16.123 4.44059 15.8964 4.36018 15.6666 4.29166V6.40867C16.2413 6.65901 16.7641 7.01513 17.2077 7.45875C17.6514 7.90236 18.0075 8.42519 18.2578 8.99986H20.3748ZM22.6111 10.0019C22.6724 10.5508 22.2189 10.9999 21.6666 10.9999H17.6745C17.1222 10.9999 16.6901 10.5402 16.5098 10.0182C16.4901 9.96115 16.4687 9.90466 16.4456 9.84879C16.2944 9.48386 16.0728 9.15227 15.7935 8.87296C15.5142 8.59365 15.1826 8.37209 14.8177 8.22093C14.7618 8.19779 14.7053 8.17636 14.6483 8.15667C14.1263 7.97642 13.6666 7.54425 13.6666 6.99197V2.99986C13.6666 2.44758 14.1157 1.99412 14.6646 2.05536C15.5039 2.149 16.3275 2.3605 17.1108 2.68495C18.2027 3.13724 19.1949 3.80017 20.0306 4.6359C20.8663 5.47163 21.5293 6.46378 21.9815 7.55571C22.306 8.33899 22.5175 9.16261 22.6111 10.0019Z" />
        </symbol>
        <symbol id="icon-arrow-up-down" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.95711 9.20696C3.56658 9.59748 2.93342 9.59748 2.54289 9.20696C2.15237 8.81643 2.15237 8.18327 2.54289 7.79274L5.83579 4.49985C6.61684 3.7188 7.88317 3.7188 8.66421 4.49985L11.9571 7.79274C12.3476 8.18327 12.3476 8.81643 11.9571 9.20696C11.5666 9.59748 10.9334 9.59748 10.5429 9.20696L8.25 6.91406V18.9998C8.25 19.5521 7.80228 19.9998 7.25 19.9998C6.69772 19.9998 6.25 19.5521 6.25 18.9998V6.91406L3.95711 9.20696Z" />
            <path
                d="M18.25 5C18.25 4.44772 17.8023 4 17.25 4C16.6977 4 16.25 4.44772 16.25 5V17.0858L13.9571 14.7929C13.5666 14.4024 12.9334 14.4024 12.5429 14.7929C12.1524 15.1834 12.1524 15.8166 12.5429 16.2071L15.8358 19.5C16.6168 20.281 17.8832 20.281 18.6642 19.5L21.9571 16.2071C22.3476 15.8166 22.3476 15.1834 21.9571 14.7929C21.5666 14.4024 20.9334 14.4024 20.5429 14.7929L18.25 17.0858V5Z" />
        </symbol>
        <symbol id="icon-messages" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M16.5 5.99973C16.8948 5.99973 17.2809 5.88285 17.6094 5.66383L20.5 3.73676V12.9997C20.5 13.552 20.0523 13.9997 19.5 13.9997H18.5V15.9997H19.5C21.1569 15.9997 22.5 14.6566 22.5 12.9997V3.73676C22.5 2.13937 20.7197 1.18659 19.3906 2.07266L16.5 3.99973H9.5C7.84315 3.99973 6.5 5.34287 6.5 6.99973V7.99973H8.5V6.99973C8.5 6.44744 8.94772 5.99973 9.5 5.99973H16.5Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.25061 18.4383C6.60524 18.1546 7.04586 18 7.5 18H15.5C16.0523 18 16.5 17.5523 16.5 17V11C16.5 10.4477 16.0523 10 15.5 10H5.5C4.94772 10 4.5 10.4477 4.5 11V19.8388L6.25061 18.4383ZM7.5 20H15.5C17.1569 20 18.5 18.6569 18.5 17V11C18.5 9.34315 17.1569 8 15.5 8H5.5C3.84315 8 2.5 9.34315 2.5 11V19.8388C2.5 21.5158 4.43986 22.4481 5.74939 21.4005L7.5 20Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.5 14C6.5 13.4477 6.94772 13 7.5 13H13.5C14.0523 13 14.5 13.4477 14.5 14C14.5 14.5523 14.0523 15 13.5 15H7.5C6.94772 15 6.5 14.5523 6.5 14Z" />
        </symbol>
        <symbol id="icon-mouse" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.75 15V9C17.75 6.23858 15.5114 4 12.75 4C9.98858 4 7.75 6.23858 7.75 9V15C7.75 17.7614 9.98858 20 12.75 20C15.5114 20 17.75 17.7614 17.75 15ZM12.75 2C8.88401 2 5.75 5.13401 5.75 9V15C5.75 18.866 8.88401 22 12.75 22C16.616 22 19.75 18.866 19.75 15V9C19.75 5.13401 16.616 2 12.75 2Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.75 6C13.3023 6 13.75 6.44772 13.75 7L13.75 10C13.75 10.5523 13.3023 11 12.75 11C12.1977 11 11.75 10.5523 11.75 10L11.75 7C11.75 6.44771 12.1977 6 12.75 6Z" />
        </symbol>
        <symbol id="icon-file-image" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.33301 3.3335C1.33301 2.22893 2.22844 1.3335 3.33301 1.3335H12.6663C13.7709 1.3335 14.6663 2.22893 14.6663 3.3335V12.6668C14.6663 13.7714 13.7709 14.6668 12.6663 14.6668H3.33301C2.22844 14.6668 1.33301 13.7714 1.33301 12.6668V3.3335ZM12.7217 13.3312C13.0434 13.3048 13.038 12.8976 12.82 12.6596L7.04571 6.35341C6.22752 5.46084 4.81011 5.4943 4.03496 6.42449L2.82086 7.88141C2.72102 8.00122 2.66634 8.15224 2.66634 8.3082V12.6668C2.66634 13.035 2.96482 13.3335 3.33301 13.3335H12.6663C12.685 13.3335 12.7035 13.3327 12.7217 13.3312ZM11.333 6.00016C12.0694 6.00016 12.6663 5.40321 12.6663 4.66683C12.6663 3.93045 12.0694 3.3335 11.333 3.3335C10.5966 3.3335 9.99967 3.93045 9.99967 4.66683C9.99967 5.40321 10.5966 6.00016 11.333 6.00016Z" />
        </symbol>
        <symbol id="icon-file-video" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.33301 3.3335C2.22844 3.3335 1.33301 4.22893 1.33301 5.3335V10.6668C1.33301 11.7714 2.22844 12.6668 3.33301 12.6668H9.33301C10.4376 12.6668 11.333 11.7714 11.333 10.6668V10.2859L12.558 11.1609C13.4405 11.7912 14.6663 11.1604 14.6663 10.0759V5.92442C14.6663 4.83992 13.4405 4.20909 12.558 4.83944L11.333 5.71445V5.3335C11.333 4.22893 10.4376 3.3335 9.33301 3.3335H3.33301Z" />
        </symbol>
        <symbol id="icon-min-facebook" width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M4.5172 12L4.5 6.75H2.25V4.5H4.5V3C4.5 0.9756 5.75363 0 7.55954 0C8.42458 0 9.16805 0.0644025 9.38471 0.0931875V2.2088L8.13222 2.20937C7.15007 2.20937 6.9599 2.67607 6.9599 3.36093V4.5H9.75L9 6.75H6.95989V12H4.5172Z" />
        </symbol>
        <symbol id="icon-min-twitter" width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10.0533 4.31712C10.0413 4.20538 10.0273 4.11584 10.0158 4.05203L10.958 2.63868C11.0173 2.54981 11.0135 2.43313 10.9487 2.34825C10.8839 2.26338 10.7723 2.22906 10.671 2.26283L9.36062 2.69961C9.29137 2.59633 9.18867 2.4601 9.05179 2.32322C8.77454 2.04597 8.3397 1.75 7.75001 1.75C7.13873 1.75 6.68633 1.92109 6.36331 2.20197C6.04361 2.47997 5.87498 2.84434 5.78873 3.18937C5.70258 3.53394 5.69492 3.87305 5.70736 4.12186C5.71099 4.19442 5.71637 4.26009 5.72221 4.31692C5.09463 4.45037 4.43796 4.24594 3.79467 3.86418C3.08532 3.4432 2.43507 2.8315 1.92679 2.32322C1.8563 2.25273 1.75065 2.23086 1.65796 2.26756C1.56527 2.30427 1.50325 2.39254 1.50014 2.49219C1.43644 4.5306 1.85669 6.99788 3.7556 8.24901C2.9569 8.68109 2.17383 8.88258 1.21901 9.00193C1.10969 9.0156 1.0222 9.09921 1.0036 9.20779C0.985004 9.31638 1.03968 9.42434 1.13821 9.47361C3.71756 10.7633 7.05997 10.6701 8.95001 8.15C9.73351 7.10535 9.99605 6.05797 10.0617 5.27076C10.0944 4.8776 10.0781 4.54904 10.0533 4.31712Z" />
        </symbol>
        <symbol id="icon-image-stroke" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13.3337 8.33317C14.2541 8.33317 15.0003 7.58698 15.0003 6.6665C15.0003 5.74603 14.2541 4.99984 13.3337 4.99984C12.4132 4.99984 11.667 5.74603 11.667 6.6665C11.667 7.58698 12.4132 8.33317 13.3337 8.33317Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.66699 4.1665C1.66699 2.78579 2.78628 1.6665 4.16699 1.6665H15.8337C17.2144 1.6665 18.3337 2.78579 18.3337 4.1665V15.8332C18.3337 17.2139 17.2144 18.3332 15.8337 18.3332H4.16699C2.78628 18.3332 1.66699 17.2139 1.66699 15.8332V4.1665ZM4.16699 3.33317H15.8337C16.2939 3.33317 16.667 3.70627 16.667 4.1665V15.8332C16.667 16.0231 16.6035 16.1981 16.4965 16.3383C16.471 16.3043 16.4433 16.271 16.4136 16.2385L8.80787 7.9414C7.78513 6.82568 6.01337 6.86751 5.04443 8.03025L3.33366 10.0832V4.1665C3.33366 3.70627 3.70675 3.33317 4.16699 3.33317ZM3.33366 12.6866V15.8332C3.33366 16.2934 3.70675 16.6665 4.16699 16.6665H14.5449L7.57928 9.06761C7.23836 8.6957 6.64778 8.70964 6.3248 9.09722L3.33366 12.6866Z" />
        </symbol>
        <symbol id="icon-video-stroke" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.167 12.857V13.3332C14.167 14.7139 13.0477 15.8332 11.667 15.8332H4.16699C2.78628 15.8332 1.66699 14.7139 1.66699 13.3332V6.6665C1.66699 5.28579 2.78628 4.1665 4.16699 4.1665H11.667C13.0477 4.1665 14.167 5.28579 14.167 6.6665V7.14269L15.6983 6.04892C16.8014 5.26098 18.3337 6.04952 18.3337 7.40515V12.5945C18.3337 13.9501 16.8014 14.7387 15.6983 13.9507L14.167 12.857ZM4.16699 5.83317H11.667C12.1272 5.83317 12.5003 6.20627 12.5003 6.6665V13.3332C12.5003 13.7934 12.1272 14.1665 11.667 14.1665H4.16699C3.70675 14.1665 3.33366 13.7934 3.33366 13.3332V6.6665C3.33366 6.20627 3.70676 5.83317 4.16699 5.83317ZM14.167 10.8088L16.667 12.5945V7.40515L14.167 9.19086V10.8088Z" />
        </symbol>
        <symbol id="icon-info-large" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 11C12.5523 11 13 11.4477 13 12V17.0009C13 17.5532 12.5523 18.0009 12 18.0009C11.4477 18.0009 11 17.5532 11 17.0009V12C11 11.4477 11.4477 11 12 11ZM12 9C12.5523 9 13 8.55228 13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8C11 8.55228 11.4477 9 12 9Z" />
        </symbol>
        <symbol id="icon-add-circled" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" />
            <path
                d="M13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8L11 11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44772 13 8 13H11L11 16C11 16.5523 11.4477 17 12 17C12.5523 17 13 16.5523 13 16L13 13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13L13 8Z" />
        </symbol>
        <symbol id="icon-file-add" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M21 19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V5C3 3.34315 4.34315 2 6 2H16L16.0107 2.01071C16.7136 2.07025 17.3761 2.3761 17.8787 2.87868L20.1213 5.12132C20.6239 5.6239 20.9297 6.28645 20.9893 6.98929L21 7V19ZM18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44771 4 6 4H15V6C15 7.10457 15.8954 8 17 8H19V19C19 19.5523 18.5523 20 18 20Z" />
            <path
                d="M13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10L11 12H9C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H11L11 16C11 16.5523 11.4477 17 12 17C12.5523 17 13 16.5523 13 16L13 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H13L13 10Z" />
        </symbol>
        <symbol id="icon-copy" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6 5H14C14.5523 5 15 5.44772 15 6V7H17V6C17 4.34315 15.6569 3 14 3H6C4.34315 3 3 4.34315 3 6V14C3 15.6569 4.34315 17 6 17H7V15H6C5.44772 15 5 14.5523 5 14V6C5 5.44772 5.44772 5 6 5Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M18 9H10C9.44772 9 9 9.44772 9 10V18C9 18.5523 9.44772 19 10 19H18C18.5523 19 19 18.5523 19 18V10C19 9.44772 18.5523 9 18 9ZM10 7C8.34315 7 7 8.34315 7 10V18C7 19.6569 8.34315 21 10 21H18C19.6569 21 21 19.6569 21 18V10C21 8.34315 19.6569 7 18 7H10Z" />
        </symbol>
        <symbol id="icon-check-circled" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C14.3582 4 16.478 5.02032 17.9422 6.64358L11 13.5858L8.20711 10.7929C7.81658 10.4024 7.18342 10.4024 6.79289 10.7929C6.40237 11.1834 6.40237 11.8166 6.79289 12.2071L9.58579 15C10.3668 15.7811 11.6332 15.781 12.4142 15L19.1015 8.31276C19.6755 9.41616 20 10.6702 20 12Z" />
        </symbol>
        <symbol id="icon-google" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path
                d="M23.7459 12.27C23.7459 11.48 23.6759 10.73 23.5559 10H12.2559V14.51H18.7259C18.4359 15.99 17.5859 17.24 16.3259 18.09V21.09H20.1859C22.4459 19 23.7459 15.92 23.7459 12.27Z"
                fill="#4285F4" />
            <path
                d="M12.2549 24C15.4949 24 18.2049 22.92 20.1849 21.09L16.3249 18.09C15.2449 18.81 13.8749 19.25 12.2549 19.25C9.12492 19.25 6.47492 17.14 5.52492 14.29H1.54492V17.38C3.51492 21.3 7.56492 24 12.2549 24Z"
                fill="#34A853" />
            <path
                d="M5.52586 14.29C5.27586 13.57 5.14586 12.8 5.14586 12C5.14586 11.2 5.28586 10.43 5.52586 9.71V6.62H1.54586C0.725858 8.24 0.255859 10.06 0.255859 12C0.255859 13.94 0.725858 15.76 1.54586 17.38L5.52586 14.29Z"
                fill="#FBBC05" />
            <path
                d="M12.2549 4.75C14.0249 4.75 15.6049 5.36 16.8549 6.55L20.2749 3.13C18.2049 1.19 15.4949 0 12.2549 0C7.56492 0 3.51492 2.7 1.54492 6.62L5.52492 9.71C6.47492 6.86 9.12492 4.75 12.2549 4.75Z"
                fill="#EA4335" />
        </symbol>
        <symbol id="icon-apple" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.4509 12.6722C19.4735 15.0331 20.8459 16.3771 21.8258 17.0375C22.3469 17.3886 22.6591 18.0083 22.4163 18.5767C22.1403 19.2228 21.7035 20.1035 21.0714 20.9992C20.0324 22.4714 18.9542 23.9382 17.2556 23.9685C15.5866 23.9984 15.0499 23.009 13.1417 23.009C11.2341 23.009 10.6378 23.9382 9.05788 23.9984C7.4183 24.0586 6.16974 22.4065 5.12223 20.9396C2.98167 17.9392 1.34583 12.4612 3.54234 8.7635C4.63352 6.92719 6.58354 5.76436 8.70011 5.73454C10.3101 5.70477 11.8298 6.7847 12.814 6.7847C13.7977 6.7847 15.6443 5.48598 17.5857 5.67672C18.253 5.70364 19.9103 5.90091 21.2928 7.12122C21.8179 7.58464 21.6309 8.37224 21.1245 8.8548C20.3543 9.58874 19.434 10.8478 19.4509 12.6722ZM16.3141 3.6917C16.9527 2.94231 17.4381 1.97736 17.5883 0.957796C17.681 0.329118 17.0942 -0.153176 16.4719 0.0451592C15.5263 0.346568 14.5772 0.940396 13.9388 1.6647C13.3209 2.35733 12.7618 3.36861 12.6197 4.42739C12.5438 4.99306 13.0442 5.45254 13.6194 5.33263C14.6679 5.11404 15.6523 4.46884 16.3141 3.6917Z" />
        </symbol>
        <symbol id="icon-lock" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13 15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V15.7324Z" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 8V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V8C18.6569 8 20 9.34315 20 11V19C20 20.6569 18.6569 22 17 22H7C5.34315 22 4 20.6569 4 19V11C4 9.34315 5.34315 8 7 8ZM9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7V8H9V7ZM6 11C6 10.4477 6.44772 10 7 10H17C17.5523 10 18 10.4477 18 11V19C18 19.5523 17.5523 20 17 20H7C6.44772 20 6 19.5523 6 19V11Z" />
        </symbol>
    </svg>
</div>


{{-- for include sweetalert box--}}
@include('livewire.admin.alerts.sweetalert.error')
@include('livewire.admin.alerts.sweetalert.success')

</body>

</html>
