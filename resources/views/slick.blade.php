<div>
    <h2> {{ $slick_object[0]->title }} </h3>
    <p> {{ $slick_object[0]->content }} </p>
</div>

<div class="responsive">
  @foreach ($slick_object as $item)
  <div class="dic">
    <a href="home/location/{{ $item->name }}">
    <img class="custom-img" src="{{ $item->img_url }}">

    @if ($item->id_session == 1)
    <div class="img-text">
      <h2 class=""> {{ $item->name }} </h2>
      <div>50000 chỗ ở</div>
    </div>
    @endif
    </a>
  </div>
  @endforeach
</div>