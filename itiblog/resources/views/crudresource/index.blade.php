{{--@extends('navbar.navbar')--}}

@extends('navbar.navbar')

@section('post')
All Posts
@endsection


@section("body")

<table class="container table">
    <a class="btn btn-success d-grid gap-2 col-6 mx-auto" href='/articles/create'> Add Article </a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">slug</th>
        <th scope="col">number</th>
        <th scope="col">Author</th>
        <th scope="col">Email</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>

    
     
        @foreach ($data as $article => $row) {{-- $row is one row is object carry data--}}
       {{--}} {{$article}}                          {{--$post is key that carry id --}}
       {{--}}  {{$row}}.<br>
       {{-{{$data}}  -}}                   {{--$data is array carry rows --}}
    
        <tr>
            <td> 
                {{$loop->iteration}}
            </td>
            <td> 
                {{$row ->title}}
            </td>
            <td> 
                {{$row ->description}}
            </td>
            <td> 
                {{$row ->slug}}
            </td>
            <td> 
                {{$row ->number}}
            </td>
            <td> 
                {{$row ->user->name}}
            </td>
            <td> 
                {{$row ->user->email}}
            </td>
            <td> 
                <a class="btn btn-warning" href="/articles/{{$row->id}}/edit"> Edit </a>
            </td>
            <td> 
                <form action="/articles/{{$row->id}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
               
            </td>
            <td> 
                <a class="btn btn-info" href='/articles/{{$row->id}}'> Show </a>
            </td>
        </tr>
            
        @endforeach

      
    </tbody>
  </table>


@endsection