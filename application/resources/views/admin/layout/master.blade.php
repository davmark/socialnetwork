<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">


    {{--{!!Html::style('resources/assets/admin/css/bootstrap.min.css')!!}--}}
    {{--{!!Html::style('resources/assets/admin/css/bootstrap-theme.css')!!}--}}
    {{--{!!Html::style('resources/assets/admin/css/elegant-icons-style.css')!!}--}}
    {{--{!!Html::style('resources/assets/admin/css/font-awesome.min.css')!!}--}}
    {{--{!!Html::style('resources/assets/admin/css/style.css')!!}--}}
    {{--{!!Html::style('resources/assets/admin/css/style-responsive.css')!!}--}}
</head>

<body>
    <!-- container section start -->
    <section id="container">
        @include('admin.include.header')
        @include('admin.include.sidebar')
    <!-- main content start -->
    <section id="main-content">
    <section class="wrapper">
    @yield('content')
    </section>
    </section>
    <!-- end main content start -->
    </section>

    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.scrollTo.min.js') !!}
    {!! Html::script('js/jquery.nicescroll.js') !!}
    {!! Html::script('js/jquery.validate.min.js') !!}

</body>
</html>
