
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Hello this is my final project" />
    <meta property="og:description" content="welcome" />
    <link rel="stylesheet" href="" />
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
    </style>
  </head>

  <body>
<footer>
    <p>Created by REEFI TEAM All Right Reserved&copy 2022 </p>
</footer>
</body>
</html>
