<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
 <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <link rel="stylesheet" href="css-font-style/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the topnav links */
 a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }

  .footer{
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
  display: flex;
  position:relative;
}
}
</style>
</head>
<body class="container">

<div class="header">
  <h1>Contact Us</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

 <!--div By Phone-->
 

<div class="row">
  <div class="column middle">
    <h2>By Phone</h2>
    <small>(Monday to Friday, 9am to 4pm PST)</small>
    <br>
    North America Toll-Free:<br>
    1-877-930-7483
    <br><br>
    International:<br>
    1-604-637-0780
    </p>
  </div>
  
  
  <div class="column">
    <h2>Social Media</h2>
  </div>
  
  <div class="column">
    <h2>Live Chat</h2>
    <p class="desc">
        Chat with a member of our in-house team.
        </p>
        <div class="button">
       <button class="btn btn-success"> <a href="" class="liveChatApp" title="Start Chat">Start Chat</a> </button>
  </div>
</div>

<div>
    
</div>
<div class="Address">
    <h2 >Address</h2>
<p >Website.com Solutions Inc.</p>
    <p>P.O. Box 43083 Cascade<br>
    Burnaby, BC V5G 4S2<br>
    Canada</p>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
