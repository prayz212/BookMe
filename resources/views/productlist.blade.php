<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookeMe</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- header -->
    <div class="default-navbar"></div>
    @include('filter-navbar')

    <!-- body -->
    <div>
        <img class="banner" src="https://cdn.luxstay.com/home/group/banner_54_1573557690.jpg" alt="banner" width="100%">
    </div>

    <h4 class="custom-container mt--50">Trước khi đặt phòng, hãy kiểm tra những địa điểm bị hạn chế du lịch trong thời gian này. Sức khỏe và sự an toàn của cộng đồng luôn được đặt hàng đầu. Vì vậy, vui lòng làm theo chỉ thị của chính phủ bởi điều đó thực sự cần thiết</h4>
    <h3 class="custom-container mt--50">2342 homestay tại Hà Nội</h3>

    @for ($i = 0; $i < 10; $i++)
        @include('item')
    @endfor

    <nav >
        <ul class="custom-pagination">
            <li><a href="#">&lang;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">&rang;</a></li>
        </ul>
    </nav>

    @include('page_footer')

</body>
</html>