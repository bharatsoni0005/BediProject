<?php include('database.php') ?>


<!doctype html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Provebest</title>
		<link rel="stylesheet" href="assets/style/style.css" >		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/amplitude.js"></script>
		<style type="text/css">
			a{
			color:black;
			}
		</style>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-header navbar-fixed-top">
				<div class="container-fluid">
					<div class="col-xs-12 col-md-3">
						<a class="navbar-logo" href="index.html"><img src="assets/images/logo.png" /></a>
					</div>
					<div class="col-xs-12 col-md-5 header-div">
						<form class="navbar-form">
						  <div class="container-1">
								<input type="search" class="header-search" placeholder="Search..." >
								<button type="submit" class="icon"><i class="fa fa-search"></i></button>
						  </div>
						</form>
					</div>
					<div class="hidden-xs col-xs-6 col-md-2 header-div">					
						<a class="header-menu" href="#">Prove</a>
					</div>
					<div class="hidden-xs col-xs-6 col-md-2 header-div">					
						<a class="header-menu" href="#" data-toggle="modal" data-target="#reg_login">Register / Login</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</nav>
		</header>
		<div class="clearfix"></div>
<div class="sidemenu" id="wrapper">
	<div class="overlay"></div>
	<div class="clearfix"></div>
	<!-- Sidebar -->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
		<ul class="nav sidebar-nav">
			<li class="sidebar-brand">
				<a class="navbar-logo" href="index.html"><img src="assets/images/logo.png" /></a>
			</li>
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="aboutus.html">About us</a>
			</li>
			<li>
				<a href="email_password.html">T & C</a>
			</li>
			<li>
				<a href="after-regestration-welcome-page.html">Journal</a>
			</li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">List of best <span class="caret"></span></a>
			</li>
			<li>
				<a href="legal_terms.html">Prove</a>
			</li>
			<li>
				<a href="legal_terms.html">Contact us</a>
			</li>
		</ul>
	</nav>
	<div class="clearfix"></div>
	<!-- /#sidebar-wrapper -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
		<div class="container-fluid bgbanner ">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-4 col-xs-12 margin-top-80  ">
						<div class="card" width="10rem;" style="height:250px">
							<img class="img-circle center-block" src="assets/images/1.jpg" width="150px" style="padding:20px"  alt="Card image cap">
							<p class="text-center"><b>Ronald Reagan</b></p>
							<p class="text-center"><i class="fa fa-map-marker fa-1x"></i>&nbsp;india,bangalore</p>
							<p class="text-center"><a href="#" style="text-decoration: underline;">view</a>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-md btn-success" style="border-radius:0px">Follow</button></p>
						</div>    
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6">
						
					</div>
				</div>
				<div class="row margin-top-80">
					<div class="col-md-12 text-right"><span style="color:white">Best Picture Of The Month / <b>MAY 2017</b> with <b>8955 <i class="fa fa-star"></i></b></span></div>
				</div>
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-camera fa-1x"></i>&nbsp;Photos</h3>
					<hr/>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/2.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/3.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/4.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/5.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
			</div>
				<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-camera fa-1x"></i>&nbsp;Videos</h3>
					<hr/>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row">
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/6.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/7.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/8.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<img class="img-responsive center-block image-square" src="assets/images/9.png"  alt="Card image cap">
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
			</div>
			
					<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Text</h3>
					<hr/>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row">
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="yellow">Love is when you don't have to be with another person to touch their heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="white">Love is when you don't have to be with another person to touch their heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="pink">Love is when you don't have to be with another person to touch thier heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="green">Love is when you don't have to be with another person to touch thier heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
			</div>
				<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-music" aria-hidden="true"></i>&nbsp;Music</h3>
					<hr/>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="row">
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
							<div id="player">
								<div id="player-top">
									<div id="amplitude-play-pause" class="amplitude-paused"></div>
								</div>
							</div>
							<audio id="single-song" amplitude-artist="Jake Jendusa" amplitude-title="Porch Stomp Blues" amplitude-album="In Search Of EP" amplitude-album-art-url="album-art/jendusaep.jpg" amplitude-audio-type=“song”>
								<source src="assets/mp3/SampleAudio_0.4mb.mp3" type="audio/mp3"/>
							</audio>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
				<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="white">Love is when you don't have to be with another person to touch thier heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="pink">Love is when you don't have to be with another person to touch thier heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
					<div class="col-md-3 col-sm-4 padding-right-3">
					<div class="card" width="10rem;">
					<div class="row" >
						<div class="col-md-12">
						<div class="green">Love is when you don't have to be with another person to touch thier heart</div>
						</div>
						</div>
					<div class="row" style="margin-bottom:5px;padding-left:5px" >
						<div class="col-md-3 col-sm-3 col-xs-3"  ><img src="assets/images/prove.jpg" style="width: 47px;height: 43px;" class="img-circle "></div>
						<div class="col-md-9 col-sm-9 col-xs-9 " style="padding-left:8px">
							<span  class="font-size-11" style="padding-bottom:20px"><b>Rajesh&nbsp;</b><i class="fa fa-map-marker fa-1x"></i>&nbsp;bangalore,&nbsp;india</span>
							<a href="#" class="resize-font" >Follow</a>&nbsp;<a href="#" class="resize-font">View</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-green" style="font-size:10px">&nbsp;<i class="fa fa-star "></i>&nbsp;5425&nbsp;</a>
						</div>
					</div>
					</div>    
				</div>
			</div>
		</div>
	</div>
	<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->	
		<div class="clearfix"></div>
		<footer class="footer">
			<div class="copyright col-xs-8">
				2017 &copy; copyright provebest | All rights reserved.
			</div>
			<div class="social-icons col-xs-4">
				<ul  class="pull-right" >
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</footer>
		<div class="clearfix"></div>
		
		<!-- Login modal -->
		<div id="reg_login" class="modal fade" role="dialog">
			<div class="modal-dialog modal-reg_log">
				<!-- Modal content-->
				<div class="modal-content reg_login">
					<div class="modal-body">
						<div class="login-div">
							<div class="text-center">
								<h1>Welcome</h1>
								<p>Login to your provebest account</p>
								<p>Imagin with all your mind. Believe with all your heart.</p>
								<p>Achive with all your might.</p>
								<br />
							</div>
							<div class="log-container">
								<form method="post" action="//database.php">
									<?php include('errors.php'); ?>
									
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-user"></i>
										</span>	
										<input type="text" class="log-input" name="username" placeholder="Username"/>
									</div>
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-lock"></i>
										</span>	
										<input type="password" class="log-input" name="password" placeholder="Password"/>
									</div>
									<button type="submit" class="log-btn" name = "login_user">SIGN IN</button>
									<div class="">
										<a href="" data-toggle="modal" data-target="#reg_signup">Create account</a>
										<a href="" class="pull-right">Forgot Password</a>
									</div>
									<div class="">
										<span class="hr-46"></span>
										<span>or</span>
										<span class="hr-46"></span>
									</div>
									<button type="button" class="log-btn log-fb-btn"><i class="fa fa-facebook-square"></i> Login with Facebook</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>	
		
		<!-- Register modal -->
		<div id="reg_signup" class="modal fade" role="dialog">
			<div class="modal-dialog modal-reg_log">
				<!-- Modal content-->
				<div class="modal-content reg_login">
					<div class="modal-body">
						<div class="login-div">
							<div class="text-center">
								<h1>Welcome</h1>
								<p>Register to our provebest account</p>
								<p>Imagin with all your mind. Believe with all your heart. Achive with all your might.</p>
								<br />
							</div>
							<div class="log-container">
								<form method="post" action="database.php">
									<?php include('errors.php'); ?>
 
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-user"></i>
										</span>	
										<input type="text" class="log-input" name="username" placeholder="Name"/>
									</div>
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-envelope"></i>
										</span>	
										<input type="text" class="log-input" name="email" placeholder="Email or Phone number"/>
									</div>
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-lock"></i>
										</span>	
										<input type="password" class="log-input" name="password_1" placeholder="Password"/>
									</div>
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-lock"></i>
										</span>	
										<input type="password" class="log-input" name="password_2" placeholder="Retype password"/>
									</div>
									<input type="submit" class="log-btn" name = "reg_user" value="COUNTINUE">
									<div class="">
										<span><input type="radio" name="" /> Agree with the T&C </span>
										<a href="" class="pull-right" data-toggle="modal" data-target="#reg_login">Login</a>
									</div>
									<div class="">
										<span class="hr-46"></span>
										<span>or</span>
										<span class="hr-46"></span>
									</div>
									<button type="button" class="log-btn log-fb-btn"><i class="fa fa-facebook-square"></i> Register with Facebook</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		
		<!-- OTP modal -->
		<div id="reg_otp" class="modal fade" role="dialog">
			<div class="modal-dialog modal-reg_log">
				<!-- Modal content-->
				<div class="modal-content reg_login">
					<div class="modal-body">
						<div class="login-div">
							<div class="text-center">
								<h1>Welcome</h1>
								<p>Register to our provebest account</p>
								<p>Imagin with all your mind. Believe with all your heart. Achive with all your might.</p>
								<br />
							</div>
							<div class="log-container">
								<form>
									<div class = "input-group">               
										<span class = "input-group-addon">
											<i class="fa fa-lock"></i>
										</span>	
										<input type="text" class="log-input" name="" placeholder="Enter OTP"/>
									</div>
									<button type="submit" class="log-btn">REGISTER</button>
									<div class="">
										<span><input type="radio" name="" /> Agree with the T&C </span>
										<a href="" class="pull-right" data-toggle="modal" data-target="#reg_login">Login</a>
									</div>
									<div class="">
										<span class="hr-46"></span>
										<span>or</span>
										<span class="hr-46"></span>
									</div>
									<button type="button" class="log-btn log-fb-btn"><i class="fa fa-facebook-square"></i> Register with Facebook</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		
		<script src="assets/js/script.js"></script>
	</body>
</html>