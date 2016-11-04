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
		div.transbox {
			background-color: rgba(255,255,255,.5);
			margin: 30px;
			margin-left: 200px;
			margin-right: 200px;
			padding:10;
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
		
		<br>
		
		<?php
		// define variables and set to empty values
		$nameErr = $cpnumErr = $nicknameErr = $cpnum = $emailErr = $genderErr = $websiteErr = "";
		$name = $homeadd = $cpnum = $nickname = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name is required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			if(empty($_POST["homeadd"])){
			  	$homeadd = "";
			}else{
			  	$homeadd = test_input($_POST["homeadd"]);
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

			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number is required";
		  	} else {
				$cpnum = test_input($_POST["cpnum"]);
				if(!preg_match("/^[0-9-]*$/",$cpnum)){
					$cpnumErr = " &nbsp;Only numbers are allowed";
					$cpnum = "";
				}
		  	}
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		?>
		<div class="transbox" style="text-align:left">
		<h2 style="text-align:center; font-size: 40px; margin-bottom: -20px">PHP Form Validation Example</h2>
		<p style="font-size: 1.5em"> Hello guest user, let me know more about you!! </p>
		<p style="text-align:center"><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			  	<p style="text-align:left; margin-left:20%">
				<u>Name</u> : <br><input type="text" name="name" value="<?php echo $name;?>">
			  	<span class="error">* <?php echo $nameErr;?></span>
			  	<br><br>
			  	<u>Nickname</u> : <br><input type="text" name="nickname" value="<?php echo $nickname;?>">
			  	<span class="error">* <?php echo $nicknameErr;?></span>
			  	<br><br>
			  	<u>E-mail</u> : <br><input type="text" name="email" value="<?php echo $email;?>">
			  	<span class="error">* <?php echo $emailErr;?></span>
			  	<br><br>
			  	<u>Home Address</u> : <br><input type="text" name="homeadd" value="<?php echo $homeadd;?>"> &nbsp;
			  	<br><br>
			  	<u>Gender</u> : <br>
			  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			 	<span class="error">* <?php echo $genderErr;?></span>
				<br><br>
			  	<u>Mobile</u> : <br><input type="text" name="cpnum" value="<?php echo $cpnum;?>">
			  	<span class="error">* <?php echo $cpnumErr;?></span>
			  	<br><br>
	  		  	<u>Comment</u> : <br><textarea name="comment" rows="3" cols="30"><?php echo $comment;?></textarea>
			  	<br><br>
			  	<input type="submit" name="submit" value="Submit">  
			  	</p>
			</form>
		</div>

		<?php
			echo "<div class='transbox'><p style='text-align:left; margin-left: 30px'><h2 style='text-align:center;font-size:45px; margin-bottom:-50px; margin-top:-10px'>Your Input:</h2>";
			echo "<table  style='margin-top: -40px''>";
			echo "<tr><th>name: </th><td>";
			echo $name;
			echo "</td></tr><br>";
			echo "<tr><th>nickname: </th><td>";
			echo $nickname;
			echo "</td></tr><br>";
			echo "<tr><th>email: </th><td>";
			echo $email;
			echo "</td></tr><br>";
			echo "<tr><th>home address: </th><td>";
			echo $homeadd;
			echo "</td></tr><br>";
			echo "<tr><th>gender: </th><td>";
			echo $gender;
			echo "</td></tr><br>";
			echo "<tr><th>mobile: </th><td>";
			echo $cpnum;
			echo "</td></tr><br>";
			echo "<tr><th>comment: </th><td>";
			echo $comment;
			echo "</td></tr>";
			echo "</table></p></div>";
			echo "<div class='transbox'><hr>";
			echo "<p>hello <b>'<u>$nickname</u>'</b> welcome to my webpage!</p>";
			echo "<hr></div>";
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