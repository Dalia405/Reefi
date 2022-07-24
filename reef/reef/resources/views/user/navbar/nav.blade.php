
  <head>
    <link rel="icon" href="/css/i.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>REEFI</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kufam:wght@700&family=Tajawal:wght@400;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;

}
body{
    background: #ddd;
    width: 100%;
    overflow-x: hidden;
}

 /*html {
  font-size: 10px;
  scroll-behavior: smooth;
}*/
/*body {
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
/*h4 {
  font-size: 2rem;
  width: 40%;
  line-height: 1.8;
  margin-bottom: 2rem;
  color: #d5d5d5;
}*/

/*p {
  font-size: 1.6rem;
  color: #345375;
  line-height: 2;
}*/

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
  width: 100%;
  margin: 0px;
  
}

nav {
  width: 90%;
  max-width: 1366px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  min-height: 10vh;
  font-size: 1.1rem;
}

nav .logo {
  font-family: "Kufam", cursive;
  font-weight: bold;
  flex: 3;
  color: #f0f4f8;
  font-size: 1.5rem !important;
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

/*.hero {
  height: 90vh;
  position: relative;
}*/

/*.hero::after {
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
}*/

/*.content {
  width: 90%;
  max-width: 1366px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  height: 90vh;
}*/

/*.btn {
  font-family: inherit;
  font-size: 1.6rem;
  font-weight: bold;
  padding: 0.75rem 3rem;
  border-radius: 0.5rem;
  border: none;
  color: #000;
  background: crimson;
  text-decoration: none;
}*/

/*.btn:hover {
  background: #fff;
}

.btn:active {
  scale: 0.98;
}*/
footer {
  background: #243b53;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
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
.width-nav{
    max-width: 100%;
    padding-right: 0 !important;
    padding-left: 0 !important;
}
.x a:hover{
       /* width: 85px; */
        padding:10px; 
        color:#fff; 
        background:crimson;
        border-radius: 5px;

    }
    .x a{
        text-decoration: none;
        background: #334e68;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    .item-count{
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
    <div class="container width-nav        ">
      <div class="nav-container">
        <nav class="noury">
          <h3 class="logo">REEFI</h3>
          <ul>
            <li><a href="index">Home</a></li>
            <li><a href="shopping">Shopping</a></li>
            <li><a href="/user/wfeedback">Feedback</a></li>
            </a></li>
          </ul>
        </nav>
    </div>
    <div class="navigation">
        <ul>
          <span style="margin-right:30% ">
            <li><a href="./meat" style="text-decoration: none; padding:60px 0px" ><span class="nav-color">Meat</span> </a></li>
            <li><a href="./dairy" style="text-decoration: none;"><span  class="nav-color">Dairy</span></a></li>
            <li><a href="./other" style="text-decoration: none;"><span  class="nav-color">Other Products</span></a></li>
          </span>
           {{--<a href="/user/shopping"> <i class="fas fa-shopping-cart" style="margin-left: 15px"></i></a>
            <span class="item-count">{{$count}}</span>--}}
            {{--<li class="nav-item">
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
            </li>--}}
            @guest
                            @if (Route::has('login'))
                            <span style="margin-left: 30% ; display:inline">
                                <li style="" class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li style="padding: 0px 0px" class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </span>
                            @endif
                            @else
                            
                            <span style="margin: 0px 5%">
                            <li style="padding: 30px" class="nav-item dropdown">
                                <a id="navbarDropdown" style="text-decoration: none" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                <div class="x" aria-labelledby="navbarDropdown">
                                    <a class="" style="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            {{--<li>
                              <a href="/user/shopping"> <i class="fas fa-shopping-cart" style="margin-left: 15px"></i></a>
                                    <span class="item-count">{{$count}}</span>
                            </li>--}}
                            <li>
                              <div class="item-count">{{$count}}</div><a href="/user/shopping" ><span class="fas fa-shopping-cart" style="color: #334e68;margin: 0% -5%; font-size:20px"></span></a>
                            </li>
                            </span>
                            </li>
                        @endguest
            
            
            
        </ul>
    </div>

    <div class="cont">
        <h1 class="text-danger text-center">
            @yield('home')
        </h1>
    
        <h1 class="text-warning text-center">
            @yield('aboutus')
        </h1>
        
    
        <h1 class="text-info text-center">
            @yield('contact')
        </h1>
    
        <h1 class="text-dark text-center">
            @yield('posts')
        </h1>
    
        <p  class="text-dark">
        @yield('body')
        </p>
        </div>


      <footer>
          <p>Created by REEFI TEAM All Right Reserved&copy 2022 </p>
      </footer>
    </div>
  </body>
</html>
<script >
   
  //in case confirm
   element=document.getElementById('alert')
   element.addEventListener("click", () => {
     alert('hello');
 });

 //incase delete
 element=document.getElementById('delete')
   element.addEventListener("click", () => {
     alert('Are You Sure?');
 });

  </script>
  