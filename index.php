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
		
		<style>
		
			body{
				font-family: 'Inconsolata', monospace;
				background-color:#2B2B37;
				letter-spacing: -0.5px;
				overflow:hidden;
			}

			::-webkit-scrollbar{
				width: 0px;
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
				height:15px;
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
				color:white;
			}

			.marginTop .fa {
				padding:4px 0px;
				font-size: 15px;
				width: 22px;
				text-align: center;
				text-decoration: none;
				border-radius: 50%;
			}

			#navBottom .fa {
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
				border-top-left-radius:2px;
				border-top-right-radius:2px;
				border-bottom-left-radius:2px;
				border-bottom-right-radius:2px;
				padding:3px 0px;
			}

			.navigationIcon .fa{
				color:#434355;
    			height:100%;
				font-size: 15px;
				width: 21px;
				text-align: center;
			}

			.posts{
				font-size: 14px;
				padding-left:14px;
				border-left: 3px solid #6C757D;
			}

			.posts a:hover{
				text-decoration:none;
			}

			#postLink{
				color:#D84AA4;
				text-decoration:underline;
			}

			#postLink:hover{
				color:#69D7E6;
				text-decoration:underline;
			}

			.scroll{
				overflow-y: auto;
   				height: 100vh;
				overflow: -moz-scrollbars-none; 
				-ms-overflow-style: none; 
			}

			#jsHistory{
				height:46%;
				width:100%;
				border-bottom:1px solid #393948;
				overflow-y: auto;
				overflow: -moz-scrollbars-none; 
				-ms-overflow-style: none; 
			}

			.jsHistoryIcon{
				border: 1px solid #04E674;
				border-top-left-radius:2px;
				border-top-right-radius:2px;
				border-bottom-left-radius:2px;
				border-bottom-right-radius:2px;
			}

			.jsHistoryTimeText{
				color:#7E7E83;
				padding-left:220px;
				text-align:right;
			}

			.jsHistroyText{
				font-size:13.5px;
				white-space: nowrap;
			}

			#timeDiv{
				margin-top:30px;
			}

			#clockText{
				font-size:100px;
				color:#6271A3;
			}

			#amText{
				font-size:35px;
				margin-left:-50px;
			}

			#dateText{
				margin-top:-45px;
				font-size:25px;
				color:#6271A3;
			}

			#alertDiv{
				color:#6271A3;
				font-size:12px;
				display:initial;
			}

			#alertDiv a{
				text-decoration:none;
			}

			#alertClose{
				color:#FEB86B;
				cursor: pointer;
			}

			.postsGit{
				font-size: 14px;
				padding-left:14px;
				border-left: 3px solid #6C757D;
			}

			.postsGit a{
				text-decoration:none;
			}

			#gitScroll{
				overflow-y: auto;
   				height: 70vh;
				overflow: -moz-scrollbars-none; 
				-ms-overflow-style: none; 
				border-bottom:1px solid #393948;
			}

			#gitScroll a{
				text-decoration:none;
			}
			

		</style>
		
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

						</div>

						<div id="alertDiv" class="text-center">
						
							<p>Did you know you can add CUSTOM LINKS to display in this section?<br>Open the SETTINGS panel and add the URLs of your favorites sites to the 'CUSTOM LINKS' textarea.<br><a id="alertClose">Got it! Don't show me this again.</a></p>

						</div>

					</div>

					<div class="col-3 marginTop pb-3" id="gitScroll">
					
						<p class="lineHeight text-center headingText"><i class="fa fa-github-alt" aria-hidden="true"></i>GITHUB ISSUES HISTORY</p>
						<p class="text-muted text-center" style="margin-top:-15px;font-size:12px;">swith to gitlab</p>

						<div class="text-center">
							<a href="" class="mr-3" style="color:#C0C56F">ISSUES</a><a href="" style="color:#D84AA4;">PULL REQUESTS</a>
						</div>

						<br>

						<div id="gitIssues">

						</div>

					</div>

				</div>
				
			</div>
			
		</div>
	
		<script>

			$("#alertClose").click(function() {	
				$("#alertDiv").css("display", "none")
			})

			function formatDate(date) {
				var monthNames = [
					"January", "February", "March",
					"April", "May", "June", "July",
					"August", "September", "October",
					"November", "December"
				];

				var day = date.getDate();
				var monthIndex = date.getMonth();
				var year = date.getFullYear();

				return monthNames[monthIndex] + ' ' + day + ', ' + year;
			}

			function formatTime(date){

				d = new Date(date);
				var hours=d.getHours(),minute=d.getMinutes(),l="AM";
				if(hours > 12){
					hours = hours - 12;
				}
				if(hours < 10){
				hours = '0'+hours;
				}
				if(minute < 10){
					minute = '0'+minute;
				}
				if(d.getHours() >= 12){
				l="PM"
				}else{
				l="AM"
				}

				return hours+':'+minute+' '+'<span id="amText">'+l+'</span>';

			}


			(function(){
				// Acquire the date
				var date = new Date();
				// Acquire the time as a string
				var time = date.toLocaleTimeString();
				$("#clockText").html(formatTime(date));
				$("#dateText").html(formatDate(date));
				setTimeout(arguments.callee, 1000);
			})();

			var jsonReddit = [{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			},
			{
				"title" : "WebGL Fluid Simulation",
				"postedBy": "u/magenta_placenta",
				"redditScore": "426"
			}];

			for(var i = 0; i < jsonReddit.length; i++) {
				$("#redditNews").html( $("#redditNews").html() + '<div class="posts"><a href=""><p class="text-white">'+jsonReddit[i].title+'<br><span style="color:#31ABBB">Posted by:</span><br><span style="color:#C0C56F">'+jsonReddit[i].postedBy+'</span><br><span class="text-muted">Reddit Score: '+jsonReddit[i].redditScore+'</span><br><span id="postLink">Link to Comments</span></p></a></div><br>')
			}

			var jsonHistory = [{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			},
			{
				"title" : "JavaScript this",
				"time": "16"
			}];

			for(var i = 0; i < jsonHistory.length; i++) {
				$("#jsHistory").html( $("#jsHistory").html() + '<div class="row mt-3"><div class="col-5"><img class="jsHistoryIcon mr-1" width="16px" src="w3school.jpg" alt=""><a href="" class="text-muted jsHistroyText">'+jsonHistory[i].title+'</a></div><div class="col-7"><span class="jsHistroyText jsHistoryTimeText">'+jsonHistory[i].time+' hours ago</span></div></div>')
			}

			var jsonGit = [{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			},
			{
				"Repo" : "example/name",
				"Issue": "2139",
				"Warning": "This is unkown DOM propertyfor. Did you mean htmlFor?"
			}];

			for(var i = 0; i < jsonGit.length; i++) {
				$("#gitIssues").html( $("#gitIssues").html() + '<div class="postsGit mt-3"><a href=""><p><span class="text-muted">Repo: '+jsonGit[i].Repo+'</span><br><span style="color:#C0C56F">Issue #'+jsonGit[i].Issue+'</span><br><span style="color:white">Warning: '+jsonGit[i].Warning+'</span></p></a></div>')
			}

		</script>

	</body>
</html>

