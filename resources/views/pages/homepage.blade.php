<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BookMe</title>
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>

    <script src="{{asset('js/homepage.js')}}"></script>

    <!-- slick js -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/myslick.js')}}"></script>
</head>
<body>

    <!-- page header -->
    <div class="default-navbar"></div>

    <!-- page body -->
    <div class="page-body">
        <div class="custom-container">
            @include('slick')
        </div>

        <div class="mt--50"></div>
        <div class="custom-container">
            @include('slick')
        </div>

        <div class="mt--50"></div>
        <div class="custom-container">
            @include('slick')
        </div>

        <div class="mt--50"></div>
        <div class="custom-container">
            @include('slick')
        </div>
        
        <div class="mt--50"></div>
        <div class="custom-container">
            @include('slick')
        </div>
    </div>

    <!-- page footer -->
    @include('page_footer')

</body>
</html>
