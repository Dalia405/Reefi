<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
   
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
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
  background: #334e68;
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
    <body>
      <div class="container">
        <div class="nav-container">
          <nav class="noury">
            <h3 class="logo" href="index.html">REEFI</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="shopping.html">Shopping</a></li>
              <li><a href="feedback.html">Feedback</a></li>
              <li class="nav-item">
                @if(Route::has('login'))
                @auth
                <div class="wrapper">
                  <div class="cart-nav">
                      <div class="icon">
                        <a href="\showcart"><i class="fas fa-shopping-cart"></i>
                          <span>Cart</span>
                        </div>
                        <div class="item-count" value="{{$count}}" id="divcount">{{$count}}</div>
                       </a>
                      </div>
                    </div>
                   

                    @else
                    <li><a class="nav-link" href="{{route('login')}}">log in</a></li>
                  

                    @if (Route::has('register'))
                    <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
     
                    @endif
                    
                        
                   
                @endauth
                @endif  
              </li>
             
            </ul>
          </nav>
      </div>
      <div class="navigation">
          <ul>
              <li><a href="#" style="text-decoration: none;" ><span class="nav-color">Meat</span> </a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Dairy</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Milk</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Cheese</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Eggs</span></a></li>
              <li><a href="#" style="text-decoration: none;"><span  class="nav-color">Honey</span></a></li>
        </ul>
      </div>
       
      </div>
 
 <body>
 

{{-- <a href="\showcart"><i class="fa fa-shopping-cart" aria-hidden="true" style="width:50px"></i>cart [{{$count}}]</a>--}}
 
  
    @if(session()->has('message'))
   

        <div class="alert alert-success">
          {{ session()->get('message') }}
          <a href="">X</a>
         {{-- <button type="button" class="close" data-dismiss="alert">X</button>--}}
        </div> 
    @endif



 @foreach ($data as $product)
{{--@dd($data);--}}
 {{--@dd($data[2]->id);--}}
 <div class="container">
<div class="card">
    <img src={{$product->image}} width="100px" height="100px" alt="">
    <div class="content">
      <div class="row">
        <div class="details">
          <span>{{$product->title}}</span>
          <p>{{$product->description}}</p>
          <p>{{$product->quantity}}</p>
          <p>{{$product->price}}</p>
        </div>
      <div>
        
        {{--{<button onclick="increment()"> <a  id="increment" href="/addcart/{{$product->id}}">Add Cart</a></button>
       {url('addcart',$product->id)}}--}}
       <form action="/cartadd/{{$product->id}}" method="POST" onsubmit="addAmountToCart(event)">
        @csrf
        <input type="number" value="1" min="1"  id="values" class="form-control" style="width:100px" name="quantity"> 

        <button class="btn btn-danger">Add Cart</button>
          {{-- <input class="btn btn-primary" id="submit"  type="submit" value="Add Cart"></button>--}}
        
        
         
       </form>
      </div>
     
      </div>
    </div>
  </div>
</div>
 

  @endforeach
</div>

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

</body>
</html>
