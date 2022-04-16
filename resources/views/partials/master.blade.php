<!DOCTYPE html>
<html lang="en">

@include('partials.head')
    <body class="fixed-navbar">
        <div class="page-wrapper">
            @include('partials.navbar')
            @include('partials.sidebar')
            <div class="content-wrapper">
                @yield('content')
                @include('partials.footer')
            </div>
        </div>
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Loading</div>
        </div>
        @include('partials.script')
    </body>
</html>