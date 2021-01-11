<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Me</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('hotel-datepicker/dist/css/hotel-datepicker.css')}}"/>
    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('fecha/dist/fecha.min.js') }}"></script>
    <script src="/path/to/hotel-datepicker.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('hotel-datepicker/dist/js/hotel-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/header.js')}}"></script>

    <!-- slick js -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/myslick.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>


</head>
<body>
    <!-- page header -->
    @include('header')

    @yield('home')

    <!-- page footer -->
    <div class="footer">
        <div style="background: orange; height: 50px; width:100%"></div>
    </div>
</body>
</html>