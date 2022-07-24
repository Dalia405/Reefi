<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <link rel="icon" href="/css/i.jpeg">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Hello this is my final product" />
    <meta property="og:description" content="welcome" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>REEFI</title>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <nav>
          <h3 class="logo"> REEFI </h3>
          <ul class="noury">
            <li><a href="#index">Home</a></li>
            <li><a href="#aboutus">About us</a></li>
            <li><a href="#contactus">Contact us</a></li>
            <li><a href="/user/meat">Products</a></li>
            </a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <div class="content">
          <h3 style="color: black">
            @if(session()->has('message'))
      <div>
        <a href="">X</a>
        {{ session()->get('message') }}
        
      </div> 
      @endif
          </h3>
          <h1>R<span>EE</span>FI</h1>
          <h4>
            Shopping Now
          </h4>
          <a href="#qualities" class="btn">Explore</a>
        </div>
      </div>
      
      <section id="qualities">
        <h2>We present to you?</h2>
        <div class="qualities-container">

        <div class="quality">
          <div class="header-container">
            <h3>Big speed</h3>
            <i class="fas fa-tachometer-alt"></i>
          </div>
          <p>
            Your order will be delivered within a period not exceeding two days.
          </p>
        </div>
        <div class="quality">
          <div class="header-container">
            <h3>High quality</h3>
            <i class="fas fa-star"></i>
          </div>
          <p>
            A specialized team with great experience in packaging and delivery to ensure that your order arrives without any damages, completely and with high efficiency.
          </p>
        </div>
        <div class="quality">
          <div class="header-container">
            <h3>Nominal prices</h3>
            <i class="fas fa-money-bill-wave-alt"></i>
          </div>
          <p>
            We offer you the best prices in addition to discounts on delivery for large quantities.
          </p>
        </div>
      </section>
      <div id='aboutus' class="about-container">
        <section class="about-us">
            <div class="about-content">
              <h2>who are we?</h2>
              <p>
             We are a start up company for selling countryside products, we are seeking for deliver the high quality products to 
             the people who can't find it in their area with the best price.<br>
             Our vision is to be the best.
              </p>
            </div>
            <img src="{{asset('image/imes.jpg')}}" alt="" />
        </div>
          </section>
      </div>
      <section id="contactus" class="contact-us">
        <h2>Connect with us</h2>
        @if(Session::has('success'))
            <div style="font-size: 20px; color:blue" class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="/send" method="post">
          @csrf
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" value={{old("name")}} >
          <label for="name" class="text-danger">{{$errors->first('name')}}</label>
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" value={{old("email")}}>
          <label for="name" class="text-danger">{{$errors->first('email')}}</label>
          <label for="msg">Your Message</label>
          <textarea name="message" id="msg" cols="30" rows="5" value={{old("message")}}></textarea>
          <label for="name" class="text-danger">{{$errors->first('message')}}</label>
        <button class="btn" type='submit'>Send</button>
        </form>
      </section>
      <footer>
          <p>Created by REEFI TEAM All Right Reserved&copy 2022 </p>
      </footer>
    </div>
  </body>
</html>
