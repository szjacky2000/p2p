<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="../css/com_pc.css"/>
        <link rel="stylesheet" type="text/css" href="../css/index_pc.css"/>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="../js/jq.js"></script>
        <script src="../js/layui/layui.js"></script>
        <title>深圳格尔美互联网金融服务有限公司 - @yield('title')</title>
    </head>
    <body>

        <div id="head">
            @include('layouts.header')
        </div>

        <div id="p_nav">
            <div class="pnav_box">
                <a href="" class="bgc_pnav">账户总览</a>
                <a href="">我要投标</a>
                <a href="">我的福利</a>
                <a href="">安全中心</a>
            </div>  
        </div>

        <div id="center">
            <div class="center_right">
                @yield('content')
            </div>
        </div>

        <div id="foot">
            @include('layouts.footer')
        </div>

    </body>
</html>
