<!DOCTYPE html>
<html>
<head>
	<title>Rate My Professor - Contact Us</title>
	<link rel="stylesheet" href="../style/TX22971_style.css">
	<link rel="stylesheet" href="../style/TX22971_stylemenu.css">
	
	<style>
		.hero-image {
			background-image: url("./assests/bg.png");
			background-color: #cccccc;
			height: 100px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.hero-text {
			text-align: center;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: white;
		}

		.hero-backgroundcolor {
			background-color: #FFFFFF;
			color: black;
		}

		* {
			box-sizing: border-box;
		}

		input[type=text], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=email] {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			width: 100%;
		}
		
		#submit{
			background-color: black;
			color:white;
			
			
		}

		.lableRating {
			color: #2a86ea;
		}

		.lable5 {
			color: #080808;
		}

		.lableDificulty {
			color: #c0dfed;
		}

		.rateP {
			color: #19d1f5;
		}

		.lableRatingSmall {
			color: #ff0a0a;
		}
	</style>
</head>

<body>

<?php
	require '../admin/TX22971_dbcon.php';
?>

	<header class="banner">
		<img src="../assests/images/logo.svg">
		<div class="panel panel-nav">
			<center>
				<div class="dropdown">
				<button class="dropbtn"><a href="./TX22971_home1.php"><b>Home</b></button></a>
				</div>
				
				<div class="dropdown">
				<button class="dropbtn"><a href="../admin/TX22971_index1.html"><b> Login </b></a></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><a href="../admin/TX22971_contactus.php"><b> Contact Us </b></a></button>
				</div>
			</center>
		</div>
	
	</header>

			<main>	
			<section>	
				<article>
				<div class="container">
				
					<h2>Contact Form</h2>
					<br>
					<p> Eunice Antwi Boasiako </p>
					<p> IS448 Final Project  </p>
					<p> Email: eunicea2@umbc.edu </p>
					<p> Contact: ###-###-#### </p><br>
				</div>
				</article>
				
			<article>

				<div class="container">
				 <form action = "./TX22971_sendcontact.php" method = "post">
				<input type = "text" name = "cname" placeholder = "Name">
				<input type = "email" name = "cemail" placeholder = "Email">
				<input type = "text" name = "csubject" placeholder = "Subject">
				<textarea name = "ccomments" placeholder = "Your comments here"></textarea>
				<button type = "submit" name = "submit" id = "submit">Send</button>
</form>
				</div>
			</article>
			</section>
	</main>
	
	
	<footer>
		<center>
			Final 2023
		</center>
	</footer>

</body>
</html>