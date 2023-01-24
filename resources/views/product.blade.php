@extends('master')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="item carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="slider-img" src="{{ $item['gallery'] }}" alt="...">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev bg-dark bg-opacity-25" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-dark bg-opacity-25" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
            <div class="mycontainer">
      <a style="text-decoration: none;" href="detail/{{$item['id']}}">
                <div class="box"> 
                  <img src="{{$item['gallery']}}">
                    <div class="content">
                      <h3 class="trending-text">{{$item['name']}}</h3>
                      <p>{{ $item['description'] }}</p>
                    </div>
                </div>
      </a>
            </div>
        @endforeach
    </div>
@endsection
{{-- <div class="trending-item">
      <a style="text-decoration: none;" href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      <div>
          <h3 class="trending-text">{{$item['name']}}</h3>
      </div>
      </a>
  </div> --}}
