@extends('admin.navbar.nav')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        tr:hover {background-color: #697681;}
        
        </style>
            
</head>

@section('body')
<div class="container">


    <table class="table table-striped table-bordered ">
        
        <a class="btn btn-outline-dark" href="/admin/others/create"> Add New Product </a>


    <thead class="table-dark">
    <tr style="text-align: center">
        <th> Index</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">price</th>
        <th scope="col">Image</th>
        {{--<th scope="col">Show</th>--}}
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        


    </tr>
    </thead>
    <tbody>


            
        @foreach ($data as $other => $val)
        <tr style="text-align: center">
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$val -> productname}}
            </td>
            <td>
            {{$val -> description}}
            </td>
            <td>
                {{$val -> price}}
            </td>
            <td>
                {{--{{$val -> img_path}}--}}
                <img style="width: 150px"
                       
                        src="{{asset('images/').'/'.$val->img_path}}"
                        alt=""
                    />
            </td>
            
            {{--<td>
                <a class="btn btn-info" href="/articles/{{$val->id}}">show</a>
            </td>--}}
            <td>
                <a class="btn btn-info" href="/admin/others/{{$val->id}}/edit">edit</a>
            </td>
            <td>
                <form action="/admin/others/{{$val->id}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
                {{--<a class="btn btn-danger"href="/admin/meat/{{$val->id}}">delete</a>--}}
            </td>
        </tr>
        @endforeach
        
    
</tbody>
@endsection 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

