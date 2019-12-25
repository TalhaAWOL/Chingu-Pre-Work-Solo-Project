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
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
		<!-- Bootstrap JS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		
	</head>

	<body>
	
		<div class="wrapper">
			<!-- Sidebar -->
			<nav id="sidebar">
			
				<a href=""><div class="navigationButton mb-4" style="color:#69D7E6;"><span class="navigationIcon mr-1" style="background-color:#69D7E6;"><i class="fa fa-wrench"></i></span>SETTINGS</div></a>
				<a href=""><div class="navigationButton mb-4" style="color:#04E674;"><span class="navigationIcon mr-1" style="background-color:#04E674;"><i class="fa fa-code"></i></span>GISTS</div></a>
				<a href=""><div class="navigationButton mb-4" style="color:#E5A25C;"><span class="navigationIcon mr-1" style="background-color:#E5A25C;"><i class="fa fa-stack-overflow"></i></span>STACK OVERFLOW</div></a>
				<a href=""><div class="navigationButton mb-4" style="color:#E452B3;"><span class="navigationIcon mr-1" style="background-color:#E452B3;"><i class="fa fa-line-chart"></i></span>TRENDING</div></a>
				<a href=""><div class="navigationButton mb-4" style="color:#B577E3;"><span class="navigationIcon mr-1" style="background-color:#B577E3;"><i class="fa fa-pencil"></i></span>SCRATCH PAD</div></a>
				<a href=""><div class="navigationButton mb-4" style="color:white;"><span class="navigationIcon mr-1" style="background-color:white;"><i class="fa fa-lightbulb-o"></i></span>PLAYGROUND<i class="fa fa-lock ml-1"></i></div></a>
				<a href=""><div class="navigationButton" style="color:#D3CD67;"><span class="navigationIcon mr-1" style="background-color:#D3CD67;"><i class="fa fa-question"></i></span>HELP/INTRO</div></a>
				<div id="navBottom">
					<a href="https://initab.com/" target="_blank"><img class="pb-2" src="initab_logo.jpg" width="110px"></a><br>
					<a href="https://twitter.com/awol_tech" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://github.com/TalhaAWOL" target="_blank"><i class="fa fa-github"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
				</div>

			</nav>

			<!-- Page Content -->
			<div id="content">

				<div class="row">
				
					<div id="redditNews" class="col-3 scroll marginTop pb-3">
					
						<p class="lineHeight text-center headingText"><i class="fa fa-reddit-alien" aria-hidden="true"></i>POPULAR ON R/JAVASCRIPT</p>
						
						<br>

						
					</div>

					<div class="col-6 marginTop">
					
						<div id="jsHistory">

							<p class="lineHeight text-center headingText"><i class="fa fa-clock-o" aria-hidden="true"></i>RELEVANT JAVASCRIPT HISTORY</p>
							
							<br>

							<div class="row"> 
							
								<div class="col-xl-5">
								
									<img class="jsHistoryIcon mr-2" width="16px" src="w3school.jpg" alt=""><a href="" class="text-muted jsHistroyText">JavaScript this</a>

								</div>

								<div class="col-xl-7">
								
									<span class="jsHistroyText jsHistoryTimeText">16 hours ago</span>

								</div>
							
							</div>
						
						</div>
						
						<div id="timeDiv" class="text-center">

							<p id="clockText"></p><p id="dateText"></p>

							<span id="alertDiv" class="text-center">
							
								<p>Did you know you can add CUSTOM LINKS to display in this section?<br>Open the SETTINGS panel and add the URLs of your favorites sites to the 'CUSTOM LINKS' textarea.<br><a id="alertClose">&#10006; Got it! Don't show me this again.</a></p>

							</span>

						</div>

					</div>

					<div class="col-3 marginTop pb-3" id="gitScroll">
					
						<p class="lineHeight text-center headingText"><i class="fa fa-github-alt" aria-hidden="true"></i>GITHUB ISSUES HISTORY</p>
						<p class="text-muted text-center" style="margin-top:-15px;font-size:12px;">swith to gitlab</p>

						<div class="text-center">
							<a href="" class="mr-3" style="color:#C0C56F">ISSUES<span id="gitArrow">&#9650;</span></a><a href="" style="color:#D84AA4;">PULL REQUESTS</a>
						</div>

						<br>

						<div id="gitIssues">

						</div>

					</div>

				</div>
				
			</div>
			
		</div>
	
		<script src="javascript.js"></script>

	</body>
</html>

