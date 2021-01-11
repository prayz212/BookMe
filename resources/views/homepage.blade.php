@extends('master')

@section('home')

<!-- page body -->
<div class="page-body">
    <div>
        @include('slick', ['slick_object' => $slick_1])
    </div>

    <div class="mt--50">
        @include('slick', ['slick_object' => $slick_2])
    </div>

    <div class="mt--50">
        @include('slick', ['slick_object' => $slick_3])
    </div>
</div>

@endsection