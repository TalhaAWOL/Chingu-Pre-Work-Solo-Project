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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

		<style>
		
			body{
				font-family: 'Inconsolata', monospace;
				background-color:#3B3C4C;
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
				background-color: #5D5F74;
				padding-left:12px;
				padding-top:15px;
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

			#navBottom a {
				text-decoration:none;
			}

		</style>
		
	</head>

	<body>
	
		<div class="wrapper">
			<!-- Sidebar -->
			<nav id="sidebar">
			
				<a href=""><div class="navigationButton mb-3" style="color:#ABE5EF;"><i class="fas fa-wrench"></i> SETTINGS</div></a>
				<a href=""><div class="navigationButton mb-3" style="color:#9AEB90;"><i class="fas fa-code"></i> GISTS</div></a>
				<a href=""><div class="navigationButton mb-3" style="color:#E7C185;"><i class="fab fa-stack-overflow"></i> STACK OVERFLOW</div></a>
				<a href=""><div class="navigationButton mb-3" style="color:#E288CC;"><i class="fas fa-chart-line"></i> TRENDING</div></a>
				<a href=""><div class="navigationButton mb-3" style="color:#C6A3EE;"><i class="fas fa-pencil-alt"></i> SCRATCH PAD</div></a>
				<a href=""><div class="navigationButton mb-3" style="color:#EDEDEA;"><i class="far fa-lightbulb"></i> PLAYGROUND<i class="fas fa-lock ml-1"></i></div></a>
				<a href=""><div class="navigationButton" style="color:#DEDB8C;"><i class="fas fa-question""></i> HELP/INTRO</div></a>
				<div id="navBottom">
					<a href="">
						<i class="fab fa-twitter-square mr-1" style="color:#74BAE6;"></i>
					</a>
					<a href="">
						<i class="fab fa-github-square mr-1"></i>
					</a>
					<a href="">
						<i class="fab fa-facebook-square mr-1" style="color:#5B70AA;"></i>
					</a>
					<a href="">
						<i class="fab fa-linkedin" style="#5A95BC"></i>
					</a>
				</div>

			</nav>
			<!-- Page Content -->
			<div id="content">

				
				
			</div>
		</div>
	
	</body>
</html>

