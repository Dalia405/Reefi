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
          <a href="\reef"><i class="fas fa-shopping-cart"></i>
          <span>Cart</span>
        </div>
        <div class="item-count">{{$count}}</div>
       </a>
      </div>
    </div>

  {{-- <a href="\reef"><i class="fa fa-shopping-cart" aria-hidden="true" style="width:50px"></i>cart [{{$count}}]</a>--}}
  
    @if(session()->has('message'))
   
    {{--<button type="button" class="close" data-dismiss="alert">X</button>--}}

        <div class="alert alert-success">
          {{ session()->get('message') }}
          ${{$totalprice}}
          <a href="">X</a>
        </div> 
    @endif



    <table class="table table-success">
        <thead>
          <tr> 
           
            <th scope="col">product_title</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
            <th scope="col">SubTotal</th>
            <th scope="col">name</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         <form action="/confirmorder" method="POST" onsubmit="totalOrders(event)">
          @csrf

         
           {{-- @if(session('cart'))--}}
           @foreach($carts as $item=>$cart)

         {{-- @php $total += $cart->price * $cart->quantity @endphp--}}
        {{--@dd($cart);--}}

          <tr>
            
            <td> <input type="text" name="producttitle[]" value="{{$cart->product_title }}" hidden=""> {{ $cart->product_title }}</td>
            <td> <input type="text" name="description[]" value="{{ $cart->description }}" hidden="">{{ $cart->description }}</td>
            <td> <input type="text"  name="image[]" value="{{$cart->image }}" hidden=""><img width="150px" src="{{$cart->image }}"></td>
            <td><input type="number"   min="1" id="number" value="{{$cart->quantity}}" class="form-control" style="width:100px" name="quantity[]" hidden="">{{ $cart->quantity }}</td>
             {{-- <td><input type="number"  value="1" min="1" id="number" value="{{$cart->quantity}}" class="form-control" style="width:100px" name="quantity[]" >{{ $cart->quantity }}
          <button type="submit" onclic=" input()" id="ubdate " class="btn btn-primary">Ubdate</button></td>--}}
           {{-- <a href="/update" class="btn btn-primary">update</a>--}}
           
           {{-- <td> <input  type="text" name="quantity[]" value="{{ $cart->quantity }}" hidden="">{{ $cart->quantity }}</td>--}} 
            <td> <input type="text"  name="price[]" value="{{$cart->price }}" hidden=""> {{$cart->price }}$</td>
            <td>{{$cart->price * $cart->quantity}}</td> 
            <td> {{$cart->name }}</td>
           {{-- <td> Total ${{ $cart->price* $cart->quantity }}</td>--}}
            
            <td><a class="btn btn-danger" href="/delete/{{$cart->id}}" id="delete"> Delete </a></td>
           
          </tr>
         @endforeach
         {{-- @endif--}}
        
        </tbody>
      </table>
      <tr>Total=${{$total}}</tr>
     
       <button type="submit"  class="btn btn-success"id="alert" onclick="alert()">Confirm Order</button>
  {{--  <a  style="width: 200px;" class="btn btn-success" href="/confirm/{{ $cart->id}}">Confirm Order</a>--}} 
    </form>


    <script >
  
      function totalOrders(e)
      {
        //e.preventDefault();
      //  count = DB::table("orders")->sum('quantity');
      //  price =DB::table("orders")->sum('price');
      //  dd($price);
      //total= count*price;
    //console.log( total);
    
    document.getElementById("divcount").innerText= total;
      }
    
     
    //in case confirm
     element=document.getElementById('alert')
     element.addEventListener("click", () => {
      confirm("Do you want to save changes?"
   });

   //incase delete
   element=document.getElementById('delete')
     element.addEventListener("click", () => {
	   alert('Are You Sure?');
   });

//in case update
   var userPreference;

if (confirm("Do you want to save changes?") == true) {
  userPreference = "Data saved successfully!";
} else {
  userPreference = "Save Canceled!";
}

document.getElementById("msg").innerHTML = userPreference; 


    </script>
    

</body>
</html>

/*
    @section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection

           
*/