@extends('admin.navbar.nav')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
        tr:hover {background-color: #697681;}


        .search-box{
    top: 50%;
    left: 50%;
    background: #fff;
    height: 40px;
    border-radius: 40px;
    padding: 0px;
    
}

.search-box:hover > .search-txt{
    width: 400px;
    padding: 0 20px;
}

.search-box:hover > .search-btn{
    background: crimson;
}



.search-btn{
    color:black;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background:rgb(255, 255, 255);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.search-txt{
    border: none;
    background: none;
    outline: none;
    float: left;
    padding: 0;
    color: crimson;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;
}
        
        </style>
            
</head>

@section('body')
<div class="container">
    <form action="/searchname" method="Get">
        {{--<div class="search-box">   
          <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search">
          <a class="search-btn" href="#">
              <button ><i class="fas fa-search">   
              </i>
              </button>
          </a>
         
      </div>--}}
      <div style="width: 480px;padding: 15px;">
        <div class="search-box">
          <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search">
          <a class="search-btn" href="#" style="text-decoration:none;">
              <i class="fas fa-search"> </i></a></div>
            </div>
      </form>

    <table class="table table-striped table-bordered ">
        
        

    <thead class="table-dark">
    <tr style="text-align: center">
        <th> Index</th>
        <th scope="col">Oder Time</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Product Name</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        
        {{--<th scope="col">Show</th>--}}
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        


    </tr>
    </thead>
    <tbody>
        @foreach ($data as $orders => $val)
        <tr style="text-align: center">
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$val -> created_at}}
            </td>
            <td>
                {{$val -> username}}
            </td>
            <td>
                {{$val -> email}}
            </td>
            <td>
            {{$val -> phone}}
            </td>
            <td>
                {{$val -> address}}
            </td>
            <td>
                {{$val -> productname}}
            </td>
            <td>
                <img style="width: 150px"
                       
                        src="{{asset('images/').'/'.$val->image}}"
                        alt=""
                    />
            </td>
            <td>
                {{$val -> description}}
            </td>
            <td>
                {{$val -> quantity}}
            </td>
            <td>
                {{$val -> totalprice}}
            </td>
            <td>
                {{$val -> status}}
            </td>
            <td>
                <form action="/searchupdatename/{{$val -> id}}" method="Get">
                 
                    <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search" hidden="">
               
             {{-- <td><a class="btn btn-danger" href="/searchdeletename/{{$cart->id}}" id="delete" onclick='return confirm("Are You Sure?")'> Delete </a></td>--}}
              <button class="btn btn-info" id="edit">Edit</button>
              </form>
                
            </td>
            <td>
                {{--<form action="/admin/orders/delete/{{$val->id}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>--}}
                {{--<a class="btn btn-danger" href="/searchdeletename/{{$val -> id}}" id="delete"> Delete </a>--}}
                <form action="/searchdeletename/{{$val -> id}}" method="Get">
                 
                    <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search" hidden="">
               
             {{-- <td><a class="btn btn-danger" href="/searchdeletename/{{$cart->id}}" id="delete" onclick='return confirm("Are You Sure?")'> Delete </a></td>--}}
              <button class="btn btn-danger" id="delete" onclick='return confirm("Are You Sure?")'>Delete</button>
              </form>
                
            </td>
        </tr>
        @endforeach
        
            
       
        
    
</tbody>
@endsection 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

