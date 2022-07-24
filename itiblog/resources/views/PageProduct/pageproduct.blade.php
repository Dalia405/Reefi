<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REEFI DIV</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />
    <style>
         * {
  margin: 0;
  padding: 0;
 /* box-sizing: border-box;*/
  font-family: 'Poppins', sans-serif;

}

html {
  font-size: 10px;
  scroll-behavior: smooth;
}
body {
  font-family: "Tajawal", sans-serif;
  background: #d9e2ec;
  overflow-x: hidden;
}

h1 {
  font-size: 5rem;
  margin-bottom: 1rem;
  color: #f0f4f8;
}

h1 span {
  color: crimson;
}

h2 {
  color: #243b53;
  font-size: 3.4rem;
  margin-bottom: 1rem;
}

h3 {
  color: #2b4561;
  font-size: 2.4rem;
  margin-bottom: 1rem;
}
h4 {
  font-size: 2rem;
  width: 40%;
  line-height: 1.8;
  margin-bottom: 2rem;
  color: #d5d5d5;
}

p {
  font-size: 1.6rem;
  color: #345375;
  line-height: 2;
}

.logo:hover{
  color: crimson;
  cursor: pointer;
}
.noury a:hover{
   color: crimson;
}

/* Nav Section */
.nav-container {
  background: #334e68;
  color: #f0f4f8;
  padding: 10px;
  justify-content: space-between;
}

nav {
  width: 90%;
  max-width: 1366px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  min-height: 10vh;
  font-size: 1.6rem;
}

nav .logo {
  font-family: "Kufam", cursive;
  font-weight: bold;
  flex: 3;
  color: #f0f4f8;
}

nav ul {
  display: flex;
  list-style-type: none;
  justify-content: space-between;
  flex: 1;
 
}

nav ul li a {
  color: #f0f4f8;
  text-decoration: none;
 
}

/* Hero Section */

.hero {
  height: 90vh;
  position: relative;
}

.hero::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: -1;
  right: 0;
  background-image: linear-gradient(
      90deg,
      rgba(51, 78, 104, 0.2) 0%,
      rgba(20, 63, 92, 0.8) 20%
    ),
    url("./images/reefi.jpg");

  animation: herobg 3s ease-in;
  background-position: center;
}

.content {
  width: 90%;
  max-width: 1366px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  height: 90vh;
}

.btn {
  font-family: inherit;
  font-size: 1.6rem;
  font-weight: bold;
  padding: 0.75rem 3rem;
  border-radius: 0.5rem;
  border: none;
  color: #000;
  background: crimson;
  text-decoration: none;
}

.btn:hover {
  background: #fff;
}

.btn:active {
  scale: 0.98;
}
footer {
  background: #243b53;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
  margin-top: 100%;
}

footer p {
  color: #d9d9d9;
}

@keyframes herobg {
  from {
    transform: scale(1.2);
  }
  to {
    transform: scale(1);
  }
}

.navigation
{
   background:#d9d9d9;
   color:#243b53 ;
   text-align: center;
}
.nav-color{
color: #243b53;
/* font-weight: bolder; */
font-size: 20PX;
}
.nav-color:hover{
    color: crimson;
}

.navigation ul, ol {list-style: none; padding: 0; margin: 0}
 ul li {display: inline-block; padding: 10px;}

.navigation div ul li:after
{
    content: " |"
}

div ul li:last-child:after
{
    content: ""
}

.navigation a:hover{
    color:crimson;
}


  
 

    .wrapper .card{
      position: relative;
      background: #fff;
      border-radius: 3px;
      width: calc(33% - 13px);
      overflow: hidden;
      box-shadow: 4px 4px 10px 0px rgba(0,0,0,0.15);
    }
    .wrapper .card img{
      width: 100%;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    .card:hover img{
      transform: scale(1.1);
    }
    .wrapper .card .content{
      position: absolute;
      width: 100%;
      bottom: -50%;
      background: #fff;
      padding: 10px 20px 22px 20px;
      box-shadow: 0px -3px 10px 0px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
    }
    .wrapper .card:hover .content{
      bottom: 0;
    }
    .card .content .row,
    .content .buttons{
      display: flex;
      justify-content: space-between;
    }
    .content .row .details span{
      font-size: 22px;
      font-weight: 500;
    }
    .content .row .details p{
      color: #333;
      font-size: 17px;
      font-weight: 400;
    }
    .content .row .price{
      color: #ff7979;
      font-size: 25px;
      font-weight: 600;
    }
    .content .buttons{
      margin-top: 20px;
    }
    .content .buttons button{
      width: 100%;
      padding: 9px 0;
      outline: none;
      cursor: pointer;
      font-size: 17px;
      font-weight: 500;
      border-radius: 3px;
      border: 2px solid #ff7979;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }
    .buttons button:first-child{
      color: #ff7979;
      margin-right: 10px;
      background: #fff;
    }
    button:first-child:hover{
      color: #fff;
      background: #ff7979;
    }
    .buttons button:last-child{
      color: #fff;
      margin-left: 10px;
      background: #ff7979;
    }
    button:last-child:hover{
      background: #ff6666;
      border-color: #ff6666;
    }

    ::selection{
  color: #fff;
  background: #ff7979;
}

.wrapper{
  
  max-width: 1130px;
  display: flex;
  align-items: center;
  justify-content: space-between;
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

        /*DIVAYA*/
     
        .product {
    position: relative;
    text-align: center;
    height: 400px;
    border-radius: 5px;
    /* overflow:auto; */
}

.product-under {
    width: 25%;
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
    width: 60%;
}

.product-summary {
    font-size: 1.1rem;
    position: relative;
    padding: 0px;
    height: 50%;
}

.product-summary > .price {
    position: absolute;
    left: 20px;
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
    text-align: left;
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
    width: 60%;
    padding: 15px;
    background-color: white;
    box-shadow: 2px 2px 2px #49989e;
    color: black;
    margin-bottom: 10px;
    cursor: pointer;
}
.btn-small:hover {
    background-color: #49989e;
    color: white;
}

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
    padding: 0 6px;
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
    /* background:rgb(255, 255, 255); */
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

<body>

   
    {{--page product--}}
    <div class="container">
        <div class="nav-container">
          <nav class="noury">
            <h3   style="padding-top: 5px" class="logo" href="index.html">REEFI</h3>
            <form action="/searchproduct" method="Get">
            <div class="search-box">
             
              <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search">
              <a class="search-btn" href="#">
                  <button ><i class="fas fa-search">   
                  </i>
                  </button>
              </a>
             
          </div>
        </form>

            <ul>
              <li style="padding-top: 20px"><a href="index.html">Home</a></li>
              <li style="padding-top: 20px"><a href="/showcartpage">Shopping</a></li>
              <li style="padding: 20px"><a href="feedback.html">Feedback</a></li>
              <li class="nav-item">
                  <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if(Route::has('login'))
              
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                @endif  
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                     @endif
              </li>
                  
                  
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <li><div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        </li>
                    </li>
                @endguest
            </ul>
          </li>
          {{--basket cart--}}
          <li class="nav-item">
            @if(Route::has('login'))
            @auth
            <div class="wrapper">
              <div class="cart-nav">
                  <div class="icon">
                    <a href="\showcartpage"><i class="fas fa-shopping-cart"></i>
                      <span>Cart</span>
                    </div>
                    <div class="item-count" value="{{$count}}" id="divcount">{{$count}}</div>
                   </a>
                  </div>
                </div>
            @endauth
            @endif  
          </li>

 
            </ul>
          </nav>
      </div>
     

    
      <div class="navigation">
          <ul>
              <li><a href="/showcartpage" style="text-decoration: none;" ><span class="nav-color">Meat</span> </a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Dairy</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Milk</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Cheese</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Eggs</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Honey</span></a></li>
        </ul>
      </div>
       
      </div>
      @if(session()->has('message'))
   

      <div>
        {{ session()->get('message') }}
        <a href="">X</a>
      </div> 
      @endif
       
      <form action="/searchproduct" method="Get">
        <div style="width:300px">
        <div class="search-box" >
         
          <input class="search-txt" type="text" name="query" id="query" value="{{request()->input('query')}} " placeholder="Type to search">
          <a class="search-btn" href="#">
              <button ><i class="fas fa-search">   
              </i>
              </button>
          </a>
         
      </div>
        </div>
    </form>
  
      @foreach ($products as $product)
    <div class="product">
        <div class="product-under">
            <figure class="product-image">
                <img
                    src={{$product->image}}
                    alt=""
                    width="100px"
                    height="100px"
                />
                <div class="product-over">
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
                <h4 class="productName">{{$product->productname}}</h4>
                <span class="stars"></span>
                <p>{{$product->description}}</p>
                <h6 class="price">
                    L.E<span class="priceValue">{{$product->price}}</span>
                </h6>
                <p>
                    <form action="/pageadd/{{$product->id}}" method="POST" onsubmit="addAmountToCart(event)">
                        @csrf
                        <input type="text" value="{{$product->id}}" min="1"  id="idproduct" class="form-control" style="width:100px" name="idproduct" hidden=""> 
                       
                        <input type="number" value="1" min="1"  id="values" class="form-control" style="width:100px" name="quantity" > 
                       <br>
                        <button class="btn btn-danger">Add Cart</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>

{{--scrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrript--}}
<script >
  
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