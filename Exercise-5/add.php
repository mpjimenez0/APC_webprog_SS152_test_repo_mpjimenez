<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $city_name = $_POST['city_name'];
 $gender = $_POST['gender'];
 $mobile = $_POST['mobile'];
 $comment = $_POST['comment'];
 
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,nickname,email,user_city,gender, mobile, comment) VALUES('$first_name','$last_name','$nickname','$email','$city_name','$gender','$mobile','$comment')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
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
			font-size: 30;
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
		div.transbox {
			background-color: rgba(255,255,255,.5);
			margin: 30px;
			margin-left: 450px;
			margin-right: 450px;
			padding:10;
		}
	</style>
		<script type="text/javascript">
	function edt_id(id)
	{
	 if(confirm('Sure to edit ?'))
	 {
	  window.location.href='edit_data.php?edit_id='+id;
	 }
	}
	function delete_id(id)
	{
	 if(confirm('Sure to Delete ?'))
	 {
	  window.location.href='index.php?delete_id='+id;
	 }
	}
	</script>
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

		<div class="transbox">
			<h1 style="font-size:40px">ADD DATA</h1>
			<form method="post">
			<p><a href="form-home.php"><strong>*back to main page*</strong></a> 
				<br>
				<br>
				First Name: <br>
				<input type="text" name="first_name" placeholder="First Name" required>
				<br><br>
				Last Name: <br>
				<input type="text" name="last_name" placeholder="Last Name" required>
				<br><br>
				Nickname: <br>
				<input type="text" name="nickname" placeholder="Nickname" required>
				<br><br>
				Email: <br>
				<input type="text" name="email" placeholder="Email Address" required>
				<br><br>
				Home: <br>
				<input type="text" name="city_name" placeholder="City" required>
				<br><br>
				Gender: <br>
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				<br><br>
				Mobile: <br>
				<input type="text" name="mobile" placeholder="Mobile Num" required>
				<br><br>
				Comment: <br>
				<input type="text" name="comment" placeholder="Comment">
			</p>
			<button type="submit" name="btn-save"><strong>SAVE</strong>
			</form>
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