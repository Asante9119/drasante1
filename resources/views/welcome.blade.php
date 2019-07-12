@extends('layout.app')
<!doctype Html>
<html>
<head>
    
    <title></title>
     <!--<nav>
    <ul>
        <li style="list-style-type: none;display:inline-block;margin-left:50px;"><input type="button" value="MENU"</li>
        <li style="list-style-type: none;display:inline-block;margin-left:50px;"><input type="button" value="NAVIGATE"</li>
        <li style="list-style-type: none;display:inline-block;margin-left:50px;"><input type="button" value="VIEW"</li>
        <li style="list-style-type: none;display :inline-block;margin-left: 50px;"><input type="button" value="FEATURES"></li>
        <li style="list-style-type: none;display :inline-block;margin-left: 700px;">
        <input type="button" value="LOGIN"/></li>
        
        </ul>
    </nav>--><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <style>@import url('https://fonts.googleapis.com/css?family=Poppins');

body{
    font-family: 'Poppins', sans-serif;
}

.footer {
    background: #222222;
    padding: 80px 0px;
    color: #FFF;
}

.footer ul{
    padding: 0px;    
}

.footer ul li {
    margin: 10px;
}

.footer ul li a {
    color: #FFF;
    text-decoration:none;
}

.footer span {
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 3px;
}

.footer .icons {
    display: flex;
    margin-left: 50%;
    justify-content: center;
    margin-top: 20px;
}

.footer .icons .fa {
    font-size: 30px;
    padding: 10px;
    color: #adadad;
}</style>
<style>
    <style>html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}

header {
      width: 100%;
      height: 100vh;
      background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat 50% 50%;
      background-size: cover;
}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
      background: #000;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}
    <link rel="stylesheet" href="main.css">
    <style type="text/css">
        
        img{
            
            width:100%;        
            height:auto;
    </style>
    <body>
    <title>MY FIRST PROFILE WEBPAGE </title>
    <meta charset="utf-8"/>

<!--
        <div class="wrapper">
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  DR ASANTE'S WEBPAGE
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="/Signup">Signup</a></li>
                     <li><a href="#">Features</a></li>
                     <li><a href="#">Settings</a></li>
                  </ul>
               </div>
                </nav>
         </div>
-->
@section('content')    
           <div id="clear">
        <div id="Column right">
       <center><h2><strong>ABOUT ME</strong></h2></center> 
        <p style="color:black"> Am Dr Asante, a proffesssional website designer, to be precise an html expert.
I enjoy the simple things in life. Being happy is a state of mind, and I don't think people should settle for less than they deserve. I always look toward the next best thing. I like seeing other people happy. When someone else is down, it breaks my heart. I've been through more than most people my age, but hey, it's what has made me stronger. Life has thrown me challenges, and so far, I've come out on top. I realized who my real friends are, and that my family always comes first..always. Photography is a passion of mine. I love music and movies. Heroes and Chuck are my favorite TV shows, so that means Monday nights I'm unavailable! I'm average, and that's okay. I'm not one of those girls that you turn your head toward when I walk down the street, and that's okay too. There is more to life than beauty on the outside. It's about what's on the inside. That's what really counts</p>
        </div>
        </div>
               <div id="Column first">
            <img  src="images/nice 3.JPG" />   
        </div>
            <h3><strong><center>SKILLS</center></strong></h3> <p>Coding - HTML, CSS, Javascript, jQuery, Dreamweaver
Programming - .net, XML/XSLT, ASP, PHP, Python, Django
Design and graphics - InDesign, Illustrator, Photoshop, Flash
Content management system (CMS) - Wordpress, Adobe Business Catalyst, Drupal, Joomla, Ektron, Zope</p>
        
       <!-- <marquee><h1><strong>!!DR ASANTE'S PROFILE WEBPAGE!!</strong></h1></marquee> <br>-->
        
 
<table>
    <tr>
    <td><img src="images/download%20(1).jpg"></td>
        <td><img src="images/download%20(2).jpg"></td>
        <td><img src="images/download.jpg"></td>
        <td><img src="images/img%203.jpg"></td>
        <td><img src="images/img%202.jpg"></td>
        <td><img src="images/img%204.jpg"></td>
    </tr>
    </table>
    
<!--<form action=""method=""> <br>                   
    <input type="button" value="SIGNUP FOR TUTORIAL"/><br><br>
    First Name:<br>
<input type="text" name="FullName"/> <br><br>
    Last Name:<br>
    <input type="text" name="last name"/><br><br>
    Date Of Birth:<br>
    <input type="DateOfBirth" name="DateOfBirth"/> <br><br>
    Gender:<br>
 <input type="radio" name="Gender" value=:female>Female<br>
     <input type="radio" name="Gender" value=:Male>Male<br>
     <input type="radio" name="Gender" value=:Other>Other<br><br>
    Date:<br>
 <input type="date"/> <br><br>
    Email:<br>
    <input type="Email" name="Email"/> <br><br>
    Nationality:<br>
    <input typeC="Nationality" name="Nationality"/> <br><br>
    Tel:<br>
        <input typeC="TeleponeNumber" name="TelephoneNumber"/> <br><br>
      <input type="SUBMIT" value="SUBMIT"/> <br><br>
    
            </form>-->
  <table>
    <tr>
    <td><img src="images/ayce%201.jpg"></td>
        <td><img src="images/ayce%203.jpg"></td>
        <td><img src="images/ayce%205.jpg"></td>
        <td><img src="images/ayce%204.jpg"></td>
        <td><img src="images/ayce6.jpg"></td>
    </tr>
    </table>  
<div class="row">
		<div class="col-md-2" ></div>
		<div class="col-md-2" ></div>
		<div class="col-md-2" ></div>
		<div class="col-md-2" ></div>
		<div class="col-md-2" ></div>
		</div>
@endsection      
     </body>
    </head>
</html>