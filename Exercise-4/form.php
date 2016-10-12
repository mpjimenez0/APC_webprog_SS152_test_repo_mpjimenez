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
		.error {color: #FF0000;}
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
			background-color: #9999FF;
			color: black; 
			border: 2px solid #4CAF50;
		}

		.button1:hover {
			background-color: #4CAF50;
			color: white;
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
				<a href="mypage-p.html" id="headlink">main</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</li>
			<li>
				<a href="mypage2-p.html" id="headlink">gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</li>
				<li class="dropdown">
				<a href="#" class="dropbtn">more...</a>
				<div class="dropdown-content">
					<a href="mypage1-p.html" id="headlink">profile</a>
					<a href="trivia-p.html" id="headlink">trivia</a>
					<a href="form.php" id="headlink">form</a>
				</div>
			</li>
		</ul>
		</div>
		
		<hr size="3px" width="300" color="black">
		<hr	size="3px" width="70%" color="black">
		
		<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		  } else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameErr = "Only letters and white space allowed";
			}
		  }
		  
		  if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  } else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format";
			}
		  }
			
		  if (empty($_POST["website"])) {
			$website = "";
		  } else {
			$website = test_input($_POST["website"]);
			// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
			  $websiteErr = "Invalid URL";
			}
		  }

		  if (empty($_POST["comment"])) {
			$comment = "";
		  } else {
			$comment = test_input($_POST["comment"]);
		  }

		  if (empty($_POST["gender"])) {
			$genderErr = "Gender is required";
		  } else {
			$gender = test_input($_POST["gender"]);
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		?>

		<h2>PHP Form Validation Example</h2>
		<p><span class="error">* required field.</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		  Name: <input type="text" name="name" value="<?php echo $name;?>">
		  <span class="error">* <?php echo $nameErr;?></span>
		  <br><br>
		  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		  Website: <input type="text" name="website" value="<?php echo $website;?>">
		  <span class="error"><?php echo $websiteErr;?></span>
		  <br><br>
		  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
		  <br><br>
		  Gender:
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		  <span class="error">* <?php echo $genderErr;?></span>
		  <br><br>
		  <input type="submit" name="submit" value="Submit">  
		</form>

		<?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		?>

		
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