

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="bbutterfly.png">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:ital,wght@1,300&family=Open+Sans:wght@300;400&family=Roboto+Condensed:ital@1&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Butterfly | Register</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/register.css"/>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    
</head>
<body>
    {{--
    <header>
        <div class="container">
            <div class="header-content">
                <a href="#" class="brand"> <span class="iconify" data-icon="vs:butterfly"></span><b>BUTTERFLY</b></a>
            </div>
    </header>
    <section class="loginbox">
        <img src="nour.png" alt="me" class="avatar">
        <h1>Sign Up</h1>
        <form action="./index.html">
            <h2>Username</h2>
            <input type="text" id="username" name="username" placeholder="Enter username"/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="invalid-feedback"></div>
            <h2>E-mail</h2>
            <input type="text" id="email" name="email" placeholder="example@gmail.com"/>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="invalid-feedback"></div>
            <h2>Password</h2>
            <input type="password" id="password"  placeholder="Enter password"/><br>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <div class="invalid-feedback"></div>
            <h2>Confirm password</h2>
            <input type="password" id="repass" placeholder="Enter password"/><br>
            <div class="invalid-feedback"></div>
            <input type="submit" placeholder="Sign up" value="Register"/><br>
            <a href="login.html">Do you have an account ?</a>
        </form>
    </section>
    <script src="script/Registeration.js"></script>

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
    width: 350px;
    height: 530px;
    font-size: 10px;
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
    left: 120px;
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

.loginbox input[type="text"], input[type="password"]
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
--}}

@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
<div  style="background-image: url('img_girl.jpg')" class="container">
   
    <div  class="row justify-content-center">
        <div class="col-md-8">
            <div  class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div  style="background: rgb(238, 97, 87)" class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div  class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    body{
        margin:0;
        padding: 0;
        background:url(pink.jpg);
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
    }
    </style>