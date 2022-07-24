
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="icon" href="/css/i.jpeg">
<style>
    body{
            background-color: #CCD4DD;
            
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
</style>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>


                

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/user/meat">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/dairy">Dairy Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/meat">Meat Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/others">Others Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/orders/orders">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/feedback/feedback">feedback</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="cont">
        <br>
        @guest
                            @if (Route::has('login'))
                            {{--<span style="margin-left: 30% ; display:inline">
                                <li style="" class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li style="padding: 0px 0px" class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </span>--}}
                            @endif
                            @else
                            
                            <span style="margin: 0px 5px">
                            <ul style="list-style:none; text-align:center ; padding:25px;  ">
                            <li style="padding: 30px " class="nav-item dropdown">
                                <span style="padding: 0px 20px ; color:blue" id="navbarDropdown" style="text-decoration: none" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </span>
                            
                                <span class="x" aria-labelledby="navbarDropdown">
                                    <a class="" style="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </span>
                            </li>
                            
                            </span>
                            </li>
                        </ul>
                        @endguest
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
</body>