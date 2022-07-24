@extends('navbar.navbar')
@section('body')
<div class='container'>
    <form action="/articles" method="POST">
        @csrf
        <div class="mb-3">
        {{--  {{$errors}}--}}
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title"  name="title" value={{old("title")}}>
          <label for="title" class="text-danger">{{$errors->first('title')}}</label>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="description"  name="description" value={{old('description')}}>
          <label for="description" class="text-danger">{{$errors->first('description')}}</label>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value={{old('slug')}}>
            <label for="slug" class="text-danger">{{$errors->first('slug')}}</label>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control" id="number"   name="number" value={{old('number')}}>
            <label for="number" class="text-danger">{{$errors->first('number')}}</label>
          </div>
        <div class="mb-3 form-check">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
    @endsection
    
