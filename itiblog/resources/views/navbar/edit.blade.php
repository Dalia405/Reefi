@extends('navbar.navbar')

@section('body')

<div class='container'>
<form action="/post/update"  method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$post->title}}" name="title">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1"value="{{$post->body}}" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Slug</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{$post->slug}}" name="slug">
      </div>
    <div class="mb-3 form-check">
        <button type="submit" class="btn btn-primary">Ubdate</button>
    </div>
  </form>
</div>
    
@endsection
{{--
<form action="" method="post" class="container">
<table class="container table">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">slug</th>
    </tr>
</thead>
<tbody>
    <td name='title'> 
        {{$post->title}}
    </td>
    <td name='body'> 
        {{$post -> body}}
    </td>
    <td  name='slug'> 
        {{$post -> slug}}
    </td>   
</tbody>
</table>
</form>
--}}
    
