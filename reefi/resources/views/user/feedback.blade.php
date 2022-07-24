<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" href="/css/i.jpeg">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <style>
         @import url("https://fonts.googleapis.com/css2?family=Kufam:wght@700&family=Tajawal:wght@400;700&display=swap");
         * {
         box-sizing: border-box;
         }
         /* Add a gray background color with some padding */
         body {
         font-family: Arial;
         background: #f1f1f1;
         overflow-x: hidden;
         }
         .nav-container {
  background: #334e68 ;
  color: #f0f4f8;
  padding: 10px;
  justify-content: space-between;
  width: 100%;
  margin: 0px;

}

nav {
  width: 90%;
  max-width: 100%;
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
footer {
  background: #243b53;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
  text-align: center;
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
         /* Header/Blog Title */
         .header {
         padding: 30px;
         font-size: 40px;
         text-align: center;
         background: #d9d9d9;
         }
         /* Create two unequal columns that floats next to each other */
         /* Left column */
         /* .leftcolumn {
         float: left;
         width: 90%;
         }
         /* Right column */
         /* .rightcolumn {
         float: left;
         width: 10%;
         padding-left: 20px;
         }  */
         /* Fake image */
         .fakeimg {
         background-color: #aaa;
         width: 100%;
         padding: 20px;
         }
         /* Add a card effect for articles */
         .card {
         background-color: white;
         padding: 20px;
         margin-top: 0;
         }
         /* Clear floats after the columns */
         .row:after {
         content: "";
         display: table;
         clear: both;
         }
         .avatar {
         vertical-align: middle;
         width: 50px;
         height: 50px;
         border-radius: 50%;
         }
         .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
         /* .first-col {

            text-align: left;
        } */
        /nav/footer/

th,
        td {
            width: 20%;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
            vertical-align: unset;
            line-height: 18px;
            font-weight: 400;
            word-break: break-all;
        }

        .first-col {
            width: 20%;
            text-align: left;
        }
        table {
            width: 100%;
        }
         /* End */
         .x a:hover{
       /* width: 85px; */
        
        color:crimson; 
        

    }
    .logo:hover{
        color: crimson;
        cursor: pointer;
    }
    
         
      </style>
   </head>
   <body>
   <div class="container width-nav">
      <div class="nav-container">
        <nav class="noury">
          <h3 class="logo">REEFI</h3>
          <ul class="x">
            <li><a style="text-decoration: none" href="index">Home</a></li>
            <li><a style="text-decoration: none" href="shopping">Shopping</a></li>
            <li><a style="text-decoration: none" href="/user/wfeedback">Feedback</a></li>
            </a></li>
          </ul>
        </nav>
    </div>
      <div class="header">
         <h2>Help us with your Feedback</h2>
      </div>
      <div class="row">
         <div class="leftcolumn">
            <div class="card">
               <hr>
               <!-- Display review section start -->
               <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               <!-- Review store Section -->
               <div class="container" style="padding-bottom: 25px; margin:0% 19%">
                  <div class="row">
                     <div class="col-sm-10 mt-4">
                        <form class="py-2 px-4"  style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off" action="/user/feedback">
                           @csrf
                           <div class="row justify-content-end mb-1">
                              <div class="col-sm-8 float-right">
                                 @if(Session::has('flash_msg_success'))
                                 <div class="alert alert-success alert-dismissible p-2 alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> {{ Session::get('flash_msg_success') }}.
                                 </div>
                                 @endif
                              </div>
                           </div>
                           <p class="font-weight-bold ">Review</p>
                           <div class="form-group row">
                              <div class=" col-sm-6">
                                 {{--<input class="form-control" type="text" name="name" placeholder="Name" maxlength="40" required/>--}}
                                 <h3 style="text-align: left; color: blue"> Hello : {{ Auth::user()->name }}</h3>
                              </div>
                              {{--<div class="col-sm-6">
                                 <input class="form-control" type="email" name="email" placeholder="Email" maxlength="80" required/>
                              </div>--}}
                           </div>
                            <div class="form-group row">
                            <div class="col-sm-10">
                                <h4>How satisfied were you with:</h4>
                                <table>
                                        <tr>
                                        <th class="first-col"></th>
                                        <th>Very Satisfied</th>
                                        <th>Satisfied</th>
                                        <th>Unsatisfied</th>
                                        <th>Very Unsatisfied</th>
                                        </tr>
                                        <tr>
                                        <td class=" col-sm-1">our website</td>
                                        <td><input type="radio" value="Very Satisfied" name="website_rate" id="Very Satisfied"/></td>
                                        <td><input type="radio" value="Satisfied" name="website_rate" id="Satisfied"/></td>
                                        <td><input type="radio" value="Unsatisfied" name="website_rate" id="Unsatisfied"/></td>
                                        <td><input type="radio" value="Very Unsatisfied" name="website_rate" id="Very Unsatisfied"/></td>
                                        </tr>
                                        <tr>
                                        <td><label for="des" class="text-danger">{{$errors->first('website_rate')}}</label></td>
                                        </tr>
                                        <tr>
                                        <td class=" col-sm-1">products</td>
                                        <td><input type="radio" value="Very Satisfied" name="products_rate" id="Very Satisfied"/></td>
                                        <td><input type="radio" value="Satisfied" name="products_rate" id="Satisfied"/></td>
                                        <td><input type="radio" value="Unsatisfied" name="products_rate" id="Unsatisfied"/></td>
                                        <td><input type="radio" value="Very Unsatisfied" name="products_rate" id="Very Unsatisfied"/></td>
                                        </tr>
                                        <tr>
                                        <td><label for="des" class="text-danger">{{$errors->first('products_rate')}}</label></td>
                                        </tr>
                                        <tr>
                                        <td class=" col-sm-1">service</td>
                                        <td><input type="radio" value="Very Satisfied" name="service_rate" id="Very Satisfied"/></td>
                                        <td><input type="radio" value="Satisfied" name="service_rate" id="Satisfied"/></td>
                                        <td><input type="radio" value="Unsatisfied" name="service_rate" id="Unsatisfied"/></td>
                                        <td><input type="radio" value="Very Unsatisfied" name="service_rate" id="Very Unsatisfied"/></td>
                                        </tr>
                                        <tr>
                                        <td><label for="des" class="text-danger">{{$errors->first('service_rate')}}</label></td>
                                        </tr>
                                </table>
                            </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-6">
                              <h4>Your overall experience with us: </h4><br>
                                 <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                 </div>
                                 
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-sm-12 ">
                                 <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                              </div>
                              <div>
                            
                                <label for="des" class="text-danger">{{$errors->first('comment')}}</label>
                               
                         </div>
                           </div>
                           <div class="mt-3 ">
                              <button class="btn btn-sm py-2 px-3 btn-info">Submit
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="rightcolumn">
            <div class="card">
               <h2>About Me</h2>
               <img class="fakeimg" style="height:100px;" src="https://mllibnjakigh.i.optimole.com/e4PqOHU-ScLJH2_m/w:auto/h:auto/q:auto/https://8bityard.com/ezoimgfmt/mllibnjakigh.i.optimole.com/e4PqOHU-NUmggukx/w:110/h:48/q:auto/https://8bityard.com/wp-content/uploads/2020/05/cropped-cropped-LogoMakr_48yknb-2.png?ezimgfmt=rs:110x48/rscb1/ng:webp/ngcb1">
               <p>Laravel | WordPress | JQuery.</p>
            </div>
         </div> -->
      </div>
      <footer>
          <p>Created by REEFI TEAM All Right Reserved&copy 2022 </p>
      </footer>
   </body>
</html>