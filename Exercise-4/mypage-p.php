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
			font-family: quicksand;
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
		td{
			background-color: rgba(255,255,255,.5);
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
			<h1 style="font-size:40"><b>Introduction</b></h1>
			<p id="normal">Hi, my name is <b>Marc Adrian Jimenez</b>, 17 years old, taking up <u>Bachelor of Science in Computer Science specializing in Computer Networks.</u> My nickname is <b>Marc </b><del>,but my father calls me <i>balong</i></del> and currently, I'm a 2<sup>nd</sup> year student, and so far, I'm enjoying and crying about my current stay in APC. I enjoy what I do at school because the interest I have for my chosen course grows and grows everyday. Crying because everything that we do gets harder and harder every term, but I know that I can motivate myself to finish this course and continue living my life and trying again when I drastically failed in this path.</p>
		</div>

		<p>
			<img src="jolteon-m.gif" alt="pokemon-gif" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="jolteon.gif" alt="pokemon-gif" id="div-pic">
		</p>

		<div>
			<h1 style="font-size:40"><b>Hobbies</b></h1>
			<p id="just"> Even though our schedule is so jam-packed and busy, with quizzes almost every week and of course, we have to study to be prepared for any surprise quizzes, we stil need to give ourselves time to relax our minds, like 30 minute up to 1 hour breaks (in order to keep our sanity), and when those times come, these are what I do.</p>
				<table cellspacing="7" >
					<tr>
						<th style="font-size:38"><b>Hobby</b></th>
						<th style="font-size:38"><b>Description</b></th>
						<th style="font-size:38"><b>Link</b></th>
					</tr>
					<tr>
						<td><b>Watching Anime</b></td>
						<td>My Highschool classmates introduced "Anime" to me, Japanese Animation, in short, its Japanese Cartoons. I really like watching anime because I enjoy the flow of the series and I also get to learn japanese words at the same time-- 2 birds, 1 stone.</td>
						<td><a href="https://kissanime.to/" target="_blank"><b>KissAnime</b><a></td>
					</tr>
					<tr>
						<td><b>Reading Manga/Manhua</b></td>
						<td>I read manga beacause I can progress through a story faster than watching its anime version</td>
						<td><a href="http://mangafox.me/" target="_blank"><b>MangaFox</b></a>, <a href="http://www.mangareader.net/" target="_blank"><b>MangaReader</b></a></td>
					</tr>
					<tr>
						<td><b>Watching K-Dramas</b></td>
						<td>I've recently been hooked to K-dramas. Why? Because the plot is not cliche as compared to Filipino Telenovelas. Also, I admire the complexion of the koreans, even though they're 30+ years old, their skin is so flawless.</td>
						<td><a href="http://kissasian.com/" target="_blank"><b>KissAsian</b></a></td>
					</tr>
				</table>
		</div>
		
		<p>
			<img src="jolteon-m.gif" alt="pokemon-gif" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="donut.png" alt="donut" id="div-pic">
			<img src="jolteon.gif" alt="pokemon-gif" id="div-pic">
		</p>
		
		<div>
			<h1 style="font-size:40"><b>Interests</b></h1>
			<p id="just">
				<b>
					Social Media
				</b> - this made everything, especially connecting with your special ones easier. In this generation, everything totally rotates around the cloud, everything that is not connected to the cloud may be considered <i>worthless</i>. In Social Media, you can catch up with the world, trends, news and gossips are just sitting there, waiting to be accessed, so why not take advantage of it? 
				<br><br>
				<b>
					Music
				</b> - I enjoy listening to rock music, I may not look like that "emo rock weirdo", but I am. Listening to the melancholic and deep lyrics will really slap you with empathy, understanding the lyrics, along with the perfect melody will really put you in the singers place. Being abused and wanting to stand-up but you whatever you do, you just cant -- thats reality for me. But whatever the lyrics says will not haunt and dwell within me, because I know that when I try to stand-up and failed, I would just try and try until I succeed because there is nothing else I can do productive in my life, people should just keep on trying and trying until they can, and thats the effect of music in me.
				<br>
			</p>
		</div>

		<p style="text-align:center">
			<img src="jolteon-m.gif" alt="pokemon-gif" style="width120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="donut.png" alt="donut" style="width:120px;height:120px">
			<img src="jolteon.gif" alt="pokemon-gif" style="width:120px;height:120px">
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