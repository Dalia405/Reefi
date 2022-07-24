@extends('navbar.navbar')


@section("body")



<div class="container card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5> {{--post is one row object carry data key--}}
     
      <p class="card-text">{{$post->body}}</p>
      <p class="card-text">{{$post->slug}}</p>
      <a href="/post" class="btn btn-primary">Back</a>
    </div>
  </div>

@endsection
{{--{{$posts["title"]}}--}}