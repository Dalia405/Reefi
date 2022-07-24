@extends('user.navbar.nav')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<head>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
    <style>
     
    .product {
    position: relative;
    text-align: center;
    height: 400px;
    border-radius: 5px;
    /* overflow:auto; */
}

.product-under {
    width: 92%;
    height: 100%;
    margin: 30px;
    margin-left: 15px;
}

.product-over {
    z-index: 10;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: none;
    justify-content: center;
    align-items: center;
    animation-name: show_top;
    animation-duration: 1s;
    backdrop-filter: blur(5px);
}

.product-image:hover .product-over {
    display: flex;
    flex-direction: column;
}

.product-image {
    position: relative;
    height: 62%;
    background-color: #eee;
}

.product-image img {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 95%;
    height: 95%;
}

.product-summary {
    font-size: 1.1rem;
    position: relative;
    padding: 0px;
    height: 50%;
}

.product-summary > .price {
   /* position: absolute;
    left: 20px;*/
    bottom: 0;
}

.stars {
    position: relative;
    width: 110px;
    height: 40px;
    display: block;
    margin: auto;
    padding: 0px;
}

.stars::after {
    content: "\2605 \2605 \2605 \2605 \2605";
    position: absolute;
    left: 0;
    top: 0;
    width: 65%;
    display: block;
    font-size: 1.4rem;
    color: #dabd3b;
    overflow: hidden;
}

.stars::before {
    content: "\2606 \2606 \2606 \2606 \2606";
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.4rem;
    color: #7e6c1f;
}
.price {
    color: #dd3333;
    margin-top: 10px;
    text-align: center;
    padding: 5px;
    font-size: 1rem;
}

.btn {
    background-color: #96c8cc;
    padding: 15px 50px 15px 30px;
    color: #141414;
    font-weight: bold;
    border-radius: 5px;
    text-align: center;
    font-size: 1.1rem;
    position: relative;
}

.btn:active {
    box-shadow: none;
}

.btn > .fa-angle-right {
    font-size: 1.5rem;
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    transition: right 0.5s;
}

.btn:hover .fa-angle-right {
    font-size: 1.5rem;
    position: absolute;
    right: 20px;
}

.btn i {
    margin: 0 5px;
}

.btn-small {
    border: none;
    font-size: 0.9rem;
    width: 100%;
    padding: 15px;
    background-color: white;
    box-shadow: 2px 2px 2px #49989e;
    color: black;
    margin-bottom: 10px;
    cursor: pointer;
}
.btn-small:hover {
    background-color: #334e68;
    color: white;
}


    </style>
    {{--<style>
    .product {
    position: relative;
    text-align: center;
    height: 400px;
    border-radius: 5px;
    overflow: hidden;
}

.product-under {
    width: 100%;
    height: 100%;
}

.product-over {
    z-index: 10;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: none;
    justify-content: center;
    align-items: center;
    animation-name: show_top;
    animation-duration: 1s;
    backdrop-filter: blur(5px);
}
    </style>--}}

@section('body')


<div style="text-align: center" class="row"> 
    @if (session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
    <a style="text-decoration: none; color:white; background:red; padding:3px; border-radius:20%; font-size:12px " href="">X</a>
</div>
    
@endif 
    @foreach ($meat as $products => $val) 
    <div class="col-sm-3">
        <div class="product">
            <div class="product-under">
                <figure class="product-image">
                    {{--<img
                        src="{{asset('images/download.jpg')}}"
                        alt=""
                    />--}}
                    <img
                       
                        src="{{asset('images/').'/'.$val->img_path}}"
                        alt=""
                    />
                    <div class="product-over">
                        {{--<a href="/addmeat/{{$val->id}}">--}}
                            <form action="/addmeat/{{$val->id}}" method="POST" onsubmit="addAmountToCart(event)">
                                @csrf
                                <input type="text" value="{{$val->id}}" min="1"  id="idproduct" class="form-control" style="width:100px" name="idproduct" hidden="">
                                <input type="number" value="1" min="1"  id="values" class="form-control" style="width:100px" name="quantity"> 
                                <br>
                        <button
                            class="btn btn-small addToCart"
                            data-product-id="2"
                        >
                            <i class="fas fa-cart-plus"></i>Add
                            to cart
                        </button>
                            </form>
                        
                    </div>
                </figure>
                <div class="product-summary">
                    {{--<h4 class="productName">{{$val -> name}}</h4>--}}
                    <span class="stars"></span>
                    <p>
                        {{$val -> productname }}
                        <br>
                        {{$val -> description}}
                    </p>
                    <h6 class="price">
                        <span class="priceValue">{{$val -> price}}</span>  EGP
                    </h6>
                </div>
            </div>
        </div>






    {{--<div class="product">
        <div class="product-under">
            <figure class="product-image">
                <img src="{{asset('images/download.jpg')}}" alt="hello"><br><br><br>
                {{--<img src="{{$val->img_path}}" alt="">--}}
                
                {{--<div class="product-over">
                    <button
                        class="btn btn-small addToCart"
                        data-product-id="2"
                    >
                        <i class="fas fa-cart-plus"></i>Add
                        to cart
                    </button>
               
                </div>
            </figure>
            <div class="product-summary">
                <h4 class="productName">{{$val -> name}}</h4>
                <span class="stars"></span>
                <p>
                    {{$val -> description}}
                </p>
                <h6 class="price">
                    <span class="priceValue">{{$val -> price}}</span>  L.E
                </h6>
                <a class="btn btn-warning">add to card</a>
            </div>
        </div>
    </div>--}}
    </div>
    @endforeach
</div>
@endsection
<script>
    function addAmountToCart(e)
    {
      //e.preventDefault();
      var number=parseInt(document.getElementById("values").value);
  
  
  var basket=parseInt(document.getElementById("divcount").innerText);
  var sum=number+basket;
  //console.log(sum);
  
  document.getElementById("divcount").innerText=sum;
    }
</script>