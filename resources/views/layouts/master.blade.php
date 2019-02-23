<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/com_pc.css"/>
        <link rel="stylesheet" type="text/css" href="../css/index_pc.css"/>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="../js/layui/layui.js"></script>
        <title>深圳格尔美互联网金融服务有限公司 - @yield('title')</title>
    </head>
    <body>

        <div id="head">
            @include('layouts.header')
        </div>

        <div id="center">
            <div class="center_left">
                @include('layouts.sidebar')
            </div>
            <div class="center_right">
                @yield('content')
            </div>
        </div>

        <div id="foot">
            @include('layouts.footer')
        </div>

    </body>
</html>
