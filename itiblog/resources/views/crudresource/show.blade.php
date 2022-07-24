@extends('navbar.navbar')


@section("body")



<div class="container card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$data->title}}</h5> {{--post is one row object carry data key--}}
     
      <p class="card-text">{{$data->description}}</p>
      <p class="card-text">{{$data->slug}}</p>
      <p class="card-text">{{$data->number}}</p>
      <a href="/articles" class="btn btn-primary">Back</a>
    </div>
  </div>

@endsection