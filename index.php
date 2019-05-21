<?php

	

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<link rel="icon" href="">

		<title>
      
			New Tab - Initab
      
		</title>
		
		<!-- jQuery CDN - Slim version (=with AJAX) -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
		<!-- Bootstrap JS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
		
			body{
				font-family: 'Inconsolata', monospace;
				background-color:#30303D;
				letter-spacing: -0.5px;
			}

			.wrapper {
				display: flex;
				width: 100%;
			}

			#sidebar {
				width: 145px;
				position: fixed;
				top: 0;
				left: 0;
				height: 100%;
				z-index: 1;
				background-color:#434355;
				padding-left:10px;
				padding-top:15px;
			}

			#content{
				padding-left:160px;
				width:97%;
				height:100%;
			}
			
			.navigationButton{
				width:100%;
				height:20px;
				font-size:13px;
			}

			#navBottom{
				position: absolute;
				bottom:0px;
				padding-bottom:20px;
				font-size:20px; !important
			}

			#navBottom a:hover{
				text-decoration:none;
			}

			.fa {
				padding:4px 0px;
				font-size: 15px;
				width: 22px;
				text-align: center;
				text-decoration: none;
				border-radius: 50%;
			}

			.fa-twitter {
				background: #55ACEE;
				color: white;
			}

			.fa-google {
				background: #dd4b39;
				color: white;
			}

			.fa-linkedin {
				background: #007bb5;
				color: white;
			}

			.fa-facebook {
				background: #3B5998;
				color: white;
			}

			.fa-github {
				background:black;
				color: white;
			}

			.marginTop{
				margin-top:40px;
			}

			.lineHeight{
				line-height: 90%;
			}

			.headingText{
				color:#69D7E6;
			}

			.navigationIcon{
				color:#434355;
				width:10%;
				height:100%;
			}

		</style>
		
	</head>

	<body>
	
		<div class="wrapper">
			<!-- Sidebar -->
			<nav id="sidebar">
			
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:#69D7E6;"><span class="navigationIcon" style="background-color:#69D7E6;"><i class="fa fa-wrench"></i></span>SETTINGS</div></a>
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:#04E674;"><span class="navigationIcon" style="background-color:#04E674;"><i class="fa fa-code"></i></span>GISTS</div></a>
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:#E5A25C;"><span class="navigationIcon" style="background-color:#E5A25C;"><i class="fa fa-stack-overflow"></i></span>STACK OVERFLOW</div></a>
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:#E452B3;"><span class="navigationIcon" style="background-color:#E452B3;"><i class="fa fa-line-chart"></i></span>TRENDING</div></a>
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:#B577E3;"><span class="navigationIcon" style="background-color:#B577E3;"><i class="fa fa-pencil"></i></span>SCRATCH PAD</div></a>
				<a href=""><div class="navigationButton mb-3 mr-3" style="color:white;"><span class="navigationIcon" style="background-color:white;"><i class="fa fa-lightbulb-o"></i></span>PLAYGROUND<i class="fa fa-lock ml-1"></i></div></a>
				<a href=""><div class="navigationButton mr-3" style="color:#D3CD67;"><span class="navigationIcon" style="background-color:#D3CD67;"><i class="fa fa-question"></i></span>HELP/INTRO</div></a>
				<div id="navBottom">
					<a href="https://twitter.com/awol_tech" target="_blank" class="fa fa-twitter"></a>
					<a href="https://github.com/TalhaAWOL" target="_blank" class="fa fa-github"></a>
					<a href="" class="fa fa-facebook"></a>
					<a href="" class="fa fa-linkedin"></a>
				</div>

			</nav>

			<!-- Page Content -->
			<div id="content">

				<div class="row">
				
					<div class="col-3 text-center marginTop">
					
						<p class="lineHeight headingText"><i class="fa fa-reddit-alien" aria-hidden="true"></i>POPULAR ON R/JAVASCRIPT</p>

					</div>

					<div class="col-6 text-center marginTop">
					
						<p class="lineHeight headingText"><i class="fa fa-clock-o" aria-hidden="true"></i>RELEVANT JAVASCRIPT HISTORY</p>

					</div>

					<div class="col-3 text-center marginTop">
					
						<p class="lineHeight headingText"><i class="fa fa-github-alt" aria-hidden="true"></i>GITHUB ISSUES HISTORY</p>
						<p class="text-muted" style="margin-top:-15px;font-size:12px;">swith to gitlab</p>

					</div>

				</div>
				
			</div>
		</div>
	
	</body>
</html>

