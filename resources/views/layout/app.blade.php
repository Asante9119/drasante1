<!doctype html>
<html>
    
<head>
    
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--    navbar-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
<!--    FOOTER LINK-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
    html, body {
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
      height: 50vh;
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
        </style>
    
    <style>footer
    @import url('https://fonts.googleapis.com/css?family=Poppins');

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
    align-items: center;
    justify-content: center;
    margin-top: 20px;
}

.footer .icons .fa {
    font-size: 30px;
    padding: 10px;
    color: #adadad;
}
</style>

    
    <body>
        <header>
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
                     <li><a href="/">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="/Signup">Signup</a></li>
                     <li><a href="#">Features</a></li>
                     <li><a href="/blog">Blog</a></li>
                      <li><a href="#">Settings</a></li>
                  </ul>
               </div>
             </nav>
         </div>
        </header>
             @yield('content')
               <!--footer-->
<!--<div class="footer">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-xs-12">
				<a href="#">
				    <img src="images/simple.jpg" alt="">
			    </a>
			</div>
            <div class="col-lg-3 col-xs-12">
				<span>MENU</span>
				<ul class="column-footer" style="margin-right=20px;">
					<li><a href="#">Comments Showcase</a></li>
					<li><a href="#">Most Viewed</a></li>
					<li><a href="#">New Arrivals</a></li>
					<li><a href="#">Specialists</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-xs-12">
				 <span>INFORMATION</span>
				 <ul class="column-footer">
					<li><a href="#">About Us </a></li>
					<li><a href="#">Frequently Asked Questions</a></li>
					<li><a href="#">Privacy Policies</a></li>
					<li><a href="#">Brands</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-xs-12" style=margin-left=20px;>
				<span>CONTACT</span>
				 <ul class="column-footer">
					<li>Address:P.O.BOX 5000</li>
				    <li>Telephone:+268415484684865/+84526598466289415</li>
					<li><a href="#">Login</a></li>
					<li><a href="#">signup</a></li>
				</ul>
			</div>
		<div class="row">
		    <div class="col-md-12">
    		   <div class="icons">
    				<a href="#">
    				    <i class="fa fa-facebook-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-twitter-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-linkedin-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-google-plus-square"></i>
    				</a>
                </div>
             </div>
		</div>
	</div>
</div>
    </div>-->
        <div class="footer">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-xs-12">
				<a href="#">
				    <img src="images/simple1.jpg" alt="">
			    </a>
			</div>
			<div class="col-lg-3 col-xs-12">
				<span>MENU</span>
				<ul class="column-footer" style="margin-right=20px;">
					<li><a href="#">Comments Showcase</a></li>
					<li><a href="#">Most Viewed</a></li>
					<li><a href="#">New Arrivals</a></li>
					<li><a href="#">Specialists</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-xs-12">
				 <span>INFORMATION</span>
				 <ul class="column-footer">
					<li><a href="#">About Us </a></li>
					<li><a href="#">Frequently Asked Questions</a></li>
					<li><a href="#">Privacy Policies</a></li>
					<li><a href="#">Brands</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-xs-12">
				<span>CONTACT</span>
				 <ul class="column-footer">
					<li>Address:P.O.BOX 5000</li>
				    <li>Telephone:+268415484684865/+84526598466289415</li>
					<li><a href="#">Login</a></li>
					<li><a href="#">signup</a></li>
				</ul>
			</div>
		</div> 
		<div class="row">
		    <div class="col-md-12">
    		   <center><div class="icons">
    				<a href="#">
    				    <i class="fa fa-facebook-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-twitter-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-linkedin-square"></i>
    				</a>
    				<a href="#">
    				    <i class="fa fa-google-plus-square"></i>
    				</a>
         </div></center>
	</div>
</div>

    </body>
    </head>        
</html>