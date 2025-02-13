<!doctype html>
<html lang="fa" dir="rtl">
<head>

    @include('livewire.emails.layouts.head-tag')
    @yield('head-tag')
</head>
<body>

    {{--  start header  --}}
    @include('livewire.emails.layouts.header')
    {{--  end header  --}}


    {{--  start main one col  --}}
    <main id="main-body-one-col" class="main-body">
        @yield('content')
    </main>
    {{--  end header  --}}


    {{--  start footer  --}}
    @include('livewire.emails.layouts.footer')
    {{--  end footer  --}}


</body>
</html>
