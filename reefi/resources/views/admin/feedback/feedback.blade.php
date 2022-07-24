@extends('admin.navbar.nav')
<head>
    <link rel="icon" href="/css/i.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        
        tr:hover {background-color: #697681 ;}
        
        </style>
            
</head>
<body>
    @section('body')

<div class="container">


    <table class="table table-striped table-bordered ">
        
        <a class="btn btn-outline-dark" href="/admin/meat/create"> Add New Product </a>


    <thead class="table-dark">
    <tr style="text-align: center">
        <th> Index</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Website Rating</th>
        <th scope="col">Product Rating</th>
        <th scope="col">Service Rating</th>
        <th scope="col">Star Rating</th>
        <th scope="col">comments</th>
        <th scope="col">Delete</th>
        


    </tr>
    </thead>
    <tbody>
        <br><br><br>
        <div class="container">
            @if(session()->has('message'))
            <div style="text-align: center" class="alert alert-success">
              <span style="font-size: 20px">
              {{ session()->get('message') }}
              </span>
              <a style="text-decoration: none; color:white; background:red; padding:0px 3px; border-radius:20%; font-size:16px " href="">X</a>
            </div> 
        @endif
        </div>
        @foreach ($data as $feedback => $val)
        <tr style="text-align: center">
            
            <td>
                {{$loop->iteration}}
            </td>
            <td>
            {{$val -> name}}
            </td>
            <td>
                {{$val -> email}}
            </td>
            <td>
                {{$val -> website_rate}}
            </td>
            <td>
                {{$val -> products_rate}}
            </td>
            <td>
                {{$val -> service_rate}}
            </td>
            <td>
                {{$val -> star_rating}}
            </td>
            <td>
                {{$val -> comments}}
            </td>
            
            
            
            <td>
                {{--<form action="/admin/feedback/destroy/{{$val->id}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>--}}
                
                <a class="btn btn-danger"href="/admin/feedback/destroy/{{$val->id}}">delete</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>