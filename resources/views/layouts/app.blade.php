<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{seo()->meta()->title()}}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">

    <meta name="robots" content="index,follow">

    <meta name="keywords" content="{{seo()->meta()->keywords()}}">
    <meta name="description" content="{{seo()->meta()->description()}}">

    <link rel="canonical" href="{{ url()->current() }}">

    @seo

    {{--  META OG  --}}
    <meta property="og:title" content="{{$post->title ?? ''}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('storage/' . $post->main_image)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name " content="{{config('app.name')}}" />
    {{--  META OG  --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800;900&display=swap"
          rel="stylesheet">
    <!-- script
    ================================================== -->

</head>

<body class="bg-dark">

{{--Header--}}
@include('includes.header')
{{--Header--}}

@yield('content')

{{--Footer--}}
@include('includes.footer')
{{--Footer--}}
<hr>

<script defer src="{{asset('js/modernizr.js')}}"></script>
<script defer src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script defer src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script defer type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script defer type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script defer src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
