<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Promise ecommerce - @yield('sub-title')</title>
        {!! Html::style('css/management.css') !!}
    </head>
    <body>
        @include('layouts.management.header')
        @include('layouts.management.sidebar')
        @include('layouts.management.main')
        @include('layouts.management.footer')
        {!! Html::script('js/management.js') !!}
        @yield('script')
    </body>
</html>
