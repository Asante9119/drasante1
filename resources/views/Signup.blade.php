@extends('layout.app')

    
@section('content')

    <style>      .mycolor{
            color : #72c02c;
        }        
        .myborder{
            padding: 20px;;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: 0px 0px 3px 0px #72c02c;
            -moz-box-shadow:    0px 0px 3px 0px #72c02c;
            box-shadow:         0px 0px 3px 0px #72c02c;
        }
        .mybutton{
            position: relative;
            left: 50%;
            top: 193px;

        }
        .margin-bottom-20 {
            margin-bottom: 20px;

        }
        .btn-u:hover {
            background: #5fb611;
        }
        .btn-u:hover, .btn-u:focus, .btn-u:active, .btn-u.active, .open .dropdown-toggle.btn-u {
            background: #5fb611;
        }
        .btn-u:hover {
            color: #fff;
            text-decoration: none;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .btn-u {
            background: #72c02c;
        }
        .btn-u {
            white-space: nowrap;
            border: 0;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            font-weight: 400;
            padding: 6px 13px;
            position: relative;
            background: #72c02c;
            display: inline-block;
            text-decoration: none;
        }
        .input-group-addon {
            border-right: 0;
            /*color: #b3b3b3;*/
            font-size: 14px;
            background: #fff;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color: #555;
            text-align: center;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .input-group .form-control {
            float: left;
            width: 100%;
            margin-bottom: 0;
        }
        .form-control {
            box-shadow: none;
        }
        .form-control {
            display: block;
            width: 100%;
            height: 34px !important;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.428571429;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid  #72c02c !important;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    </style>
    
    <center><div class="container" style="width:auto;height: auto; margin-top:0.5%; " >
    <div class="col-md-3"></div>
    <div class="col-md-6" >
         <div class="row myborder">
             <h4 style="color: #7EB59E; margin: initial; margin-bottom: 10px;">Sign Up Now</h4><hr>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="User Name" name="UserRegistration[username]" id="UserRegistration_username" type="text">                                                        </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Password" name="UserRegistration[password]" id="UserRegistration_password" type="password">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="First Name" name="UserRegistration[fname]" id="UserRegistration_fname" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Last Name" name="UserRegistration[lname]" id="UserRegistration_lname" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Address" name="UserRegistration[address]" id="UserRegistration_address" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Contact Number" name="UserRegistration[contactnumber]" id="UserRegistration_contactnumber" type="text">                                    </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn-u pull-left" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
      </div></center> 
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
</div>-->

@endsection