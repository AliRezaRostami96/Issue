<!doctype html>
<html lang="fa">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--        <link rel="stylesheet" href="{{@asset('css/bootstrap/bootstrap.rtl.min.css')}}">--}}
        <link rel="stylesheet" href="{{@asset('css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{@asset('css/FontAwesome/all.min.css')}}">
        <link rel="stylesheet" href="{{@asset('plugins/select-2/css/select2.min.css')}}"/>
        <link rel="stylesheet" href="{{@asset('css/header.css')}}">
        <link rel="stylesheet" href="{{@asset('css/main.css')}}">
        @yield('style')

        <title>@yield('title')</title>

    </head>
    <body dir="ltr">

        @include('layout.menu')

        <div class="main-content min-vh-100">
            <div class="content-header bg-white shadow">
                <div class="dropdown text-end">
                    <button class="bg-light border border-start border-0 text-dark p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user m-0 mt-1 p-2 bg-dark rounded-circle text-light fs-6"></i>
                        <span class="me-1">Alireza Rostami</span>
                    </button>
                    <ul class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">
                        <li><a class="btn btn-secondary w-100" href="#">Exit</a></li>
                    </ul>
                </div>
            </div>
            <div class="py-2 px-4">
                @yield('content')
            </div>
        </div>

        @yield("modal")

        <script src="{{@asset('js/jquery/jquery-3.6.0.min.js')}}"></script>
        <script src="{{@asset('js/bootstrap/popper.min.js')}}"></script>
        <script src="{{@asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{@asset('plugins/select-2/js/select2.min.js')}}"></script>
        <script src="{{@asset('js/js.js')}}"></script>

        @yield('script')
    </body>
</html>
