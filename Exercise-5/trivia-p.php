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
		
		.button {
			background-color: transparent; /* Green */
			border: none;
			color: white;
			padding: 4px 8px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			cursor: pointer;
		}

		.button1 {
			background-color: #9292b4;
			color: black; 
			border: 2px solid black;
		}

		.button1:hover {
			background-color: #9292b4;
			color: white;
			border: 2px solid white;
		}
		.blink {
			-webkit-animation: blink .75s linear infinite;
			-moz-animation: blink .75s linear infinite;
			-ms-animation: blink .75s linear infinite;
			-o-animation: blink .75s linear infinite;
			 animation: blink .75s linear infinite;
		}
		@-webkit-keyframes blink {
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; }
			100% { opacity: 0; }
		}
		@-moz-keyframes blink {
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; }
			100% { opacity: 0; }
		}
		@-ms-keyframes blink {
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; }
			100% { opacity: 0; }
		}
		@-o-keyframes blink {
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; }
			100% { opacity: 0; }
		}
		@keyframes blink {
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; }
			100% { opacity: 0; }
		}
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
					<a href="form-home.php" id="headlink">form</a>
				</div>
			</li>
		</ul>
		</div>
		
		<hr size="3px" width="300" color="black">
		<hr	size="3px" width="70%" color="black">
		
		<h1 style="text-align:center; font-size: 3em"> FUN FACTS !! </h1>
		<div>
			<p><b>My Favorite viand</b> : <br><em id="demo1">** answer **</em></p>
			<button class="button button1" onclick="document.getElementById('demo1').innerHTML = 'KARE-KARE!!!'">click for answer</button>
			
			<p><b>My favorite ice-cream flavor</b> : <br><em id="demo2">** answer **</em></p>
			<button class="button button1" onclick="document.getElementById('demo2').innerHTML = 'Avocado or Bubblegum'">click for answer</button>
			
			<p><b>My Pet-peeve</b> : <br><em id="demo3">** answer **</em></p>
			<button class="button button1" onclick="document.getElementById('demo3').innerHTML = 'People who think High and Mighty of themselves'; document.getElementById('demo4').style.fontSize='60px'">click for answer</button>
			
			<p class="tab blink" id="demo4"> YES or NO?? </p>
			
			<p><b>I can do splits on both legs</b> : <br><em id="demo5">** answer **</em></p>
			<button class="button button1" onclick="document.getElementById('demo5').innerHTML = 'YES!!'">click for answer</button>
			
			<p><b>I love taking care of kids</b> : <br><em id="demo6">** answer **</em></p>
			<button class="button button1" onclick="document.getElementById('demo6').innerHTML = 'No... All of them annoy me.'">click for answer</button>
		</div>
		
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