@extends('navbar.navbar')

@section('body')
<div class='container'>
<form action="/add/storedata" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="title">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Slug</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="slug">
      </div>
    <div class="mb-3 form-check">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>
    
@endsection