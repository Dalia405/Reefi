<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   
    <style>
     *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
::selection{
  color: #fff;
  background: #ff7979;
}

 .wrapper .cart-nav{
 
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
.cart-nav .item-count{
  font-size: 15px;
  height: 23px;
  width: 23px;
  color: crimson;
  background: #ffcccc;
  text-align: center;
  line-height: 22px;
  border: 1px solid #ffb3b3;
  border-radius: 50%;
}
    </style>
</head>

    

<body class="container">
  <div class="wrapper">
    <div class="cart-nav">
        <div class="icon">
{{--عايزة ابعت query \searchproduct?query={{$query}} للص--}}
          
          <a href="/searchshowcart"><i class="fas fa-shopping-cart"></i>
          <span>Cart</span>
        </div>
        <div class="item-count">{{$count}}</div>
       </a>
      </div>
    </div>

 
  
    @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
          ${{$totalprice}}
          <a href="">X</a>
        </div> 
    @endif



    <table class="table table-success">
        <thead>
          <tr> 
           
            <th scope="col">productname</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
            <th scope="col">SubTotal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

         <form action="/confirmorderproduct" method="POST" onsubmit="totalOrders(event)">
          @csrf
           @foreach($carts as $item=>$cart)
          <tr>  
            <td> <input type="text" name="productname[]" value="{{$cart->productname }}" hidden=""> {{ $cart->productname }}</td>
            <td> <input type="text" name="description[]" value="{{ $cart->description }}" hidden="">{{ $cart->description }}</td>
            <td> <input type="text"  name="image[]" value="{{$cart->image }}" hidden=""><img width="150px" src="{{$cart->image }}"></td>
            <td><input type="number"   min="1" id="number" value="{{$cart->quantity}}" class="form-control" style="width:100px" name="quantity[]" hidden="">{{ $cart->quantity }}</td>
            <td> <input type="text"  name="price[]" value="{{$cart->price }}" hidden=""> {{$cart->price }}$</td>
            <td>{{$cart->price * $cart->quantity}}</td>  
            <td><a class="btn btn-danger" href="/searchdeletecart/{{$cart->id}}" id="delete"  onclick='return confirm("Are You Sure?")'> Delete </a></td>
           
          </tr>
         @endforeach
        </tbody>
      </table>
      <tr>Total Price=${{$totalprice}}</tr>
     
       <button type="submit"  class="btn btn-success"id="alert" >Confirm Order</button>
    </form>


   
   

   


   
    

</body>
</html>
