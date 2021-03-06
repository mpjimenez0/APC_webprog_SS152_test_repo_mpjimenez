<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		WEBPROG-Excercise4
	</title>
	<style>
		body{
			background-image: url("clouds-bg.png");
			background-attachment: fixed;
			font-family: quicksand;
		}
		h1{
			text-align:center; 
			color:black;
		}
		b{
			font-style: strong;
		}
		div{
			text-align:center;
			align: middle;
		}
		a:link{
			text-decoration:none;
			color:black;
		}
		a:visited{
			color: black;
		}
		a:hover, a:active{
			color: #966fd6; 
		}
		p{
			text-align: center;
			font-size: 26;
		}
		table {
			font-family:quicksand;
			width: 100%;
			font-size: 25;
			padding-left: 70;
			padding-right: 70;
		}
		th{
			background:#FFD1DC;
		}
		td, th {
			border: 3px solid #000000;
			text-align: left;
			padding: 10px;
		}
		hr{
			width: 58%;
			color: black;
		}
		#div-pic{
			width: 120;
			height: 120;
		}
		#normal{
			font-size: 25;
			padding-left:10%;
			padding-right:10%;
		}
		#subcat{
			display:inline-block;
			border:1px;
			padding:5px 0;
		}
		#extramenu{
			width: 100%;
			height: 10%;
		}
		#title{
			font-size: 85;
			height: 40;
			padding: 20;
		}
		#just{
			font-size: 25;
			padding-left:10%;
			padding-right:10%;
			text-align: justify;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
		
		#div.menu{
			width:465px;
			margin: 0 auto;
			border:1px solid red;
			text-align:center;
		}
		#menu{
			margin: 0 auto;
			text-align: center;
		}

		li {
			float: left;
		}

		li a, .dropbtn {
			display: inline-block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li.dropdown {
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			min-width: 110px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			background-color: rgba(232,232,232,0.9);
		}

		.dropdown-content a {
			color: black;
			margin-top: 2;
			text-decoration: none;
			display: block;
			text-align: center;
		}

		.dropdown-content a:hover {
			color: #660066; 
		}

		.dropdown:hover .dropdown-content { 
			display: block;
		}
		.mySlides {
			display: block;
			margin: auto;
			padding: 10;
			border: 2px solid black;
		}
		div.transbox {
			background-color: rgba(255,255,255,.5);
			padding:15px;
		}
		#gallery{
			margin-right: 10%;
			margin-left: 10%;
		}
		.w3-content{max-width:980px;margin:auto}
		.w3-section{margin-top:16px!important;margin-bottom:16px!important}
		@font-face {
			font-family: quicksand;
			src: url(quicksand_book.otf);
		}
		@font-face {
			font-family: amethyst;
			src: url(shorelines.otf);
		}
	</style>
	
	<body>
		<div style="text-align:center; margin-top:5em; margin-bottom:-30">
			<p style="font-family: amethyst; font-size: 50px;"> (metanoia) </p>
		</div>
		
		<div id="div.menu">
		<ul style="font-size:40" id="subcat">
			<li>
				<a href="mypage-p.php" id="headlink">main</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</li>
			<li>
				<a href="mypage2-p.php" id="headlink">gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</li>
				<li class="dropdown">
				<a href="#" class="dropbtn">more...</a>
				<div class="dropdown-content">
					<a href="mypage1-p.php" id="headlink">profile</a>
					<a href="trivia-p.php" id="headlink">trivia</a>
					<a href="form.php" id="headlink">form</a>
				</div>
			</li>
		</ul>
		</div>
		
		<hr size="3px" width="58%" color="black">
		<hr	size="3px" width="58%" color="black">
			
		<div>
			<h1 style="font-size:40"> from instagram </h1>
			<div class="transbox" id="gallery">
				<p style="text-align:center">
					<a href="https://www.instagram.com/p/BKOMgV1h06x/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14280321_1234212163276797_1523550554_n.jpg?ig_cache_key=MTMzNzA2MTEzODQwMzY0MzA1Nw%3D%3D.2" style="width:400; height:400; padding:20; border: 2px solid black" alt="pagmamahal-ni-inay" class="insta">
					</a>
					<a href="https://www.instagram.com/p/BKTVp5yBxhN/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14295389_164637553978645_1613835973_n.jpg?ig_cache_key=MTMzODUwODc1Mjc3NzA1ODM4MQ%3D%3D.2" style="width:400; height:400; padding:20; border: 2px solid black" alt="tulay" class="insta">
					</a>	
					<a href="https://www.instagram.com/p/BKU8570hdLv/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14350400_333572740310605_2024852409_n.jpg?ig_cache_key=MTMzODk2Mj1MzI2ODY3MzI2Mw%3D%3D.2" style="width:400; height:400; padding:20; border: 2px solid black" alt="lakbay" class="insta">
					</a>
					<a href="https://www.instagram.com/p/BKXKENZBurv/?taken-by=_eydriyuhn" target="_blank" >
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/c0.135.1080.1080/14373941_338848249784509_124719283_n.jpg?ig_cache_key=MTMzOTU4MzY4Mzg4NzU1NzM1OQ%3D%3D.2.c" style="width:400; height:400; padding:20; border: 2px solid black" alt="alphonsus" class="insta">
					</a>
				</p>
			</div>
		</div>
		
		<h1 style="font-size:40"> slideshow </h1>
		<div class="w3-content w3-section" style="max-width:500px">
			<img class="mySlides" src="banner.jpg" style="width:100%">
			<img class="mySlides" src="ss.jpg" style="width:100%">
			<img class="mySlides" src="ss1.jpg" style="width:100%">
			<img class="mySlides" src="pep.jpg" style="width:100%">
			<img class="mySlides" src="tone.jpg" style="width:100%">
			<img class="mySlides" src="seniors.jpg" style="width:100%">
			<img class="mySlides" src="sfa.jpg" style="width:100%">
			<img class="mySlides" src="prom.jpg" style="width:100%">
		</div>
		
		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 1000); // Change image every 2 seconds
		}
		</script>
		
		<hr>
		<hr>
		
		<p style="text-align:center">
			<img src="jolteon-m.gif" alt="pokemon-gif" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="jolteon.gif" alt="pokemon-gif" id="div-pic">
		</p>
		
		<br>
		<hr>
		
		<div>
			<p style="text-align:center; font-family:quicksand; font-size: 20; color:black">- - - Jimenez, Marc Adrian P. | BSCS-CN151 | APC - - -</p>
			<p style="text-align:center; margin-top:0.5em">
				<a href="https://www.facebook.com/jumanjimenez" target="_blank"><img src="facebook.jpg" alt= "facebook"style="width:60px;height:60px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://twitter.com/_eydriyan" target="_blank"><img src="twitter.jpg" alt="twitter" style="width:60px; height:60px"></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://www.instagram.com/_eydriyuhn/" target="_blank"><img src="instagram.jpg" alt="instagram" style="width:60px; height:60px"></a> .
			</p>
		</div>
	</body>
</html>