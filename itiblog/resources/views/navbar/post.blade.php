@extends('navbar.navbar')



@section('post')
All Posts
@endsection


@section("body")

<table class="container table">
    <a class="btn btn-success d-grid gap-2 col-6 mx-auto" href='/add'> Add Post </a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">slug</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>

    
     
        @foreach ($posts as $post => $row) {{-- $row is one row is object carry data--}}
        {{$post}}                          {{--$post is key that carry id --}}
        {{$row}}.<br>
       {{--}} {{$posts}}                         {{--$posts is array carry rows --}}
    
        <tr> 
            <td> 
                {{$loop->iteration}}
            </td>
            <td> 
                {{$row -> title}}
            </td>
            <td> 
                {{$row -> body}}
            </td>
            <td> 
                {{$row -> slug}}
            </td>
            <td> 
                <a class="btn btn-warning" href="/post/edit/{{$row ->id}}"> Edit </a>
            </td>
            <td> 
                <a class="btn btn-danger" href="/post/delete/{{$row->id}}"> Delete </a>
            </td>
            <td> 
                <a class="btn btn-info" href='/show/{{$loop->iteration}}'> Show </a>
            </td>
        </tr>
            
        @endforeach

      
    </tbody>
  </table>



@endsection

