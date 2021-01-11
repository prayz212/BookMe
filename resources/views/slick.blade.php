<div>
    <h2> {{ $slick_object->get_title() }} </h3>
    <p> {{ $slick_object->get_content() }} </p>
</div>

<div class="fade custom-slick">
  @foreach ($slick_object->get_array() as $a)
  <div class="dic">
    <a href="home/location/{{ $a }}">
      <img class="custom-img" src="https://cdn.luxstay.com/home/location/location_5_1559786196.png">

      <div class="img-text">
        <h2 class=""> {{ $a }} </h2>
        <div>50000 chỗ ở</div>
      </div>
    </a>
  </div>
  @endforeach
</div>