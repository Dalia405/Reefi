@extends('user.navbar.nav')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <style>
       body{
     display: flex;
    max-width: 100% !important;
    padding: 0px !important;
    
     
    
     background: #ddd;
    
    *{
     margin: 0 ;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif;
   }/*
   ::selection{
     color: #fff;
     background: #ff7979;
   }
   body{
     display: flex;
     align-items: center;
     justify-content: center;
     min-height: 10vh;
     background: #ddd;
     padding: 0 20px;
     /*margin-left: 90%;*/
   /*}
   .wrapper{
     position: relative;
     max-width: 1130px;
     display: flex;
     align-items: center;
     justify-content: space-between;
   }   
    .wrapper .cart-nav{
     position: absolute;
     right: 0;
     top: -35%;
     width: 130px;
     background: #fff;
     padding: 13px 15px;
     border-radius: 3px;
     display: flex;
     cursor: pointer;
     justify-content: space-evenly;
     box-shadow: 3px 3px 8px 0px rgba(0,0,0,0.15);
   }
   .cart-nav .icon{
     color: crimson;
   }
   .cart-nav .icon i{
     font-size: 20px;
   }
   .cart-nav .icon span{
     font-weight: 500;
   }
   /*.cart-nav .item-count{
     font-size: 15px;
     height: 23px;
     width: 23px;
     color: crimson;
     background: #ffcccc;
     text-align: center;
     line-height: 22px;
     border: 1px solid #ffb3b3;
     border-radius: 50%;
   }*/
       </style>
</head>

@section('home')
<body class="container">
    {{--<div class="wrapper">
      <div class="cart-nav">
          <div class="icon">
            <a href="\pageproduct"><i class="fas fa-shopping-cart"></i>
            <span>Cart</span>
          </div>
          <div class="item-count">{{$count}}</div>
         </a>
        </div>
      </div>--}}
  
   
    
      @if(session()->has('message'))
          <div class="alert alert-success">
            <span style="font-size: 20px">
            {{ session()->get('message') }}
            </span>
            <a style="text-decoration: none; color:white; background:red; padding:3px; border-radius:20%; font-size:12px " href="">X</a>
          </div> 
      @endif
  
  
  
      <table class="table table-success">
          <thead>
            <tr style="text-align: center"> 
             
              <th scope="col">product name</th>
              <th scope="col">description</th>
              <th scope="col">image</th>
              <th scope="col">quantity</th>
              <th scope="col">price</th>
              <th scope="col">SubTotal</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
  
           <form action="/user/success" method="POST" onsubmit="totalOrders(event)">
            @csrf
             @foreach($carts as $item=>$cart)
            <tr style="text-align: center">  
              <td style="padding: 30px 5px"> <input type="text" name="productname[]" value="{{$cart->productname }}" hidden=""> {{ $cart->productname }}</td>
              <td style="padding: 30px 5px"> <input type="text" name="description[]" value="{{ $cart->description }}" hidden="">{{ $cart->description }}</td>
              <td> <input type="text"  name="image[]" value="{{$cart->image }}" hidden=""><img width="150px" src="{{asset('images/').'/'.$cart->image}}"></td>
              <td style="padding: 30px 5px"><input type="number"   min="1" id="number" value="{{$cart->quantity}}" class="form-control" style="width:100px" name="quantity[]" hidden="">{{ $cart->quantity }}</td>
              <td style="padding: 30px 5px"> <input type="text"  name="price[]" value="{{$cart->price }}" hidden=""> {{$cart->price }} EGP </td>
              <td style="padding: 30px 5px">{{$cart->price * $cart->quantity}}</td>  
              <td style="padding: 30px 5px"><a class="btn btn-danger" href="/delete/{{$cart->id}}" id="delete" onclick="return confirm('Are You Sure?')"> Delete </a></td>
             
            </tr>
           @endforeach
          </tbody>
        </table>
        <tr>Total Price = {{$totalprice}} EGP</tr>
       
         <button type="submit"  class="btn btn-success">Confirm Order</button>
      </form>
  
  
      
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<script >
   
    //in case confirm
    /*element=document.getElementById('alert')
     element.addEventListener("click", () => {
       alert('hello');
   });*/

   //incase delete
   element=document.getElementById('delete')
     element.addEventListener("click", () => {
       alert('Are You Sure?');
   });

    </script>