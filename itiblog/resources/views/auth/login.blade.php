@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="bbutterfly.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Butterfly | log in</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</head>
<body>
   
    

    <section class="loginbox">
        <img src="nour.png" alt="me" class="avatar">
        <h1>Sign in</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-3">
            <h2 >Email</h2>
            <div class="col-md-6">
            <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            </div>
           
            <div class="row mb-3">
            <h2>Password</h2>
            <div class="col-md-6">
            <input type="password" id="password" name="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror"  required autocomplete="current-password">
            
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
            </div>
            </div>

            <div >
                <div >
                    <div class="form-check">
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

           
            <input type="submit"  placeholder="Sign in" value="Log in"/>
            @if (Route::has('password.request'))
            <a style="display:flex" class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
           <br>
            <a href="register.html">Create a new account</a>
        </form>
    </section>
    <script src="./script/Log in.js"></script>
</body>
</html>

<style>

body{
    margin:0;
    padding: 0;
    background:url(pink.jpg);
    background-size: cover;
    font-family: 'Open Sans', sans-serif;
}

.loginbox{
    width: 320px;
    height: 500px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 60%;
    left: 50%;
    position:absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top:-50px;
    left: 100px;
    padding: 5px;
    text-align: center;
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 25px;
}

.loginbox h2{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100px;
    margin-bottom: 20px;
}

.loginbox input[type="email"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    width: 200px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background:#000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: crimson;
    color: #000;
}
.loginbox a {
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
    margin: 10px;
}

.loginbox a:hover{
    color:crimson;
}
    </style>
