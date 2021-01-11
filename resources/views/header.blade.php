<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Header</title>
        
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
        {{-- <script src="/path/to/hotel-datepicker.min.js"></script> --}}
        <script type="text/javascript" src="{{ URL::asset('hotel-datepicker/dist/js/hotel-datepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/header.js')}}"></script>
        

    </head>

    <body>
        <div class="header">
            <div class="d-flex bd-highlisght mx-4">
                <div class="p-2 mr-2 mt-1 rounded-circle bg-light logo-header">
                    <a href="#">
                        <svg version="1.1" viewBox="0 0 50 50" class="svg-icon svg-fill" width= "50" height="50">
                            <path pid="0" d="M25.093 0c13.781.06 24.94 11.317 24.882 25.106C49.917 38.894 38.663 50.058 24.88 50 11.1 49.942-.059 38.683.001 24.894.057 11.106 11.31-.058 25.092 0zm11.801 31.9L14.398 16.053c.241-.26.48-.518.74-.777 2.7-2.687 5.971-4.031 9.775-4.015 3.804.015 7.064 1.388 9.741 4.098.238.241.476.482.694.743l-5.951 4.133 2.381 1.688 5.153-3.576v.02L39.33 16.7c-.692-1.203-1.584-2.325-2.616-3.39-3.231-3.292-7.167-4.947-11.788-4.967-4.6-.019-8.53 1.603-11.809 4.867a17.806 17.806 0 00-2.682 3.408l1.429 1.004 23.429 16.51c-.24.26-.48.518-.74.777-2.7 2.687-5.971 4.011-9.775 3.996-3.803-.016-7.063-1.37-9.74-4.08-.258-.26-.496-.521-.734-.782l6.111-4.251-.139-.181-2.183-1.528-5.373 3.735v-.021l-2.377 1.65a17.824 17.824 0 002.654 3.43c3.253 3.291 7.169 4.946 11.769 4.965 4.62.021 8.549-1.602 11.83-4.866 1.06-1.075 1.96-2.21 2.682-3.406l-2.383-1.67z"></path>
                        </svg>
                    </a>

                </div>

                <div class="pt-3">
                    <div class="d-flex shadow bg-white search-box">
                        <div class="p-2 ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            <input class="search-input" type="text" placeholder="Tìm kiếm">
                        </div>
                        <div class="vl mt-1"></div>
                        <div class="date_picker rounded p-2" style="width:240px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <input id="input" type="text" style="width:200px; border:none; outline:none">
                            <script type="text/javascript">
                            $( document ).ready(function() {
                                var input = document.getElementById('input');
                                var datepicker = new HotelDatepicker(input, {
                                    format: 'DD-MM-YYYY'
                                });
                            });
                            </script>
                            
                        </div>
                        <div class="vl mt-1"></div>
                        <div class="dropdown p-1">
                            <button class="btn bg-white " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <span>Số khách</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-item-text">
                                    <div><p>Người lớn</p></div>
                                    <div class="ml-auto">
                                        <button class="btn minus">-</button>
                                        <input type="text" class="input-people" placeholder="0">
                                        <button class="btn plus">+</button>
                                    </div>
                                </div>
                                <div class="dropdown-item-text">
                                    <div><p>Trẻ em</p></div>
                                    <div class="ml-auto">
                                        <button class="btn minus">-</button>
                                        <input type="text" class="input-people" placeholder="0">
                                        <button class="btn plus">+</button>
                                    </div>
                                </div>
                                <div class="dropdown-item-text">
                                    <div><p>Trẻ sơ sinh</p></div>
                                    <div class="ml-auto">
                                        <button class="btn minus">-</button>
                                        <input type="text" class="input-people" placeholder="0">
                                        <button class="btn plus">+</button>
                                    </div>
                                </div>
                                <div class="dropdown-item-text">
                                    <button class="btn-cancel">Xóa</button>
                                    <button class="ml-auto btn-apply">Áp dụng</button>
                                </div>
                            </div>
                            <button class="btn btn-secondary search-button p-1" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>

                <div class="ml-auto align-self-center p-2 bd-highlight">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="#">Host</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Đăng nhập</a>
                            </li>
                        </ul>
                        </div>
                    </nav>
                </div>  
            </div>               
        </div>
    </body>
</html>
