<html>
<head>
	<title> Rate MyProfessor - Template </title>
	<link rel="stylesheet" href="../style/TX22971_style.css">
	<link rel="stylesheet" href="../style/TX22971_stylemenu.css">
	

</head>

<body>

<style>
.hero-image {
  background-image: url("../assests/bg.png");
  background-color: #cccccc;
  height: 350px;
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
</style>
</head>
<body>


<?php
require '../admin/TX22971_dbcon.php';
?>

	<header class="banner">
	<img src="../assests/logo.svg">  

		<div class="panel panel-nav">
			<center>
				<div class="dropdown">
				<button class="dropbtn"><A href= ./TX22971_home1.php><B> Home </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href= ../admin/TX22971_index1.html><B> Login </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href= ./TX22971_contactus.php><B> Contact Us </B></A></button>
				</div>
			</center>
		</div>
	
	</header>
	
	<main>
<?php

				

?>	
				
				<article>
				<Center>
				<div class="hero-image">
					<div class="hero-text">
					<image src=bglogo.svg />
					<p>Search professor</p>
					<div>
					<Form action="TX22971_search.php">
					&nbsp;&nbsp;&nbsp;<input type="text" name="search" size="155" height="24">
					<input type="image" src="images/search.png" alt="Submit" width="24" height="24">
					</Form>
				</div>	
				</div>
				</div>
	
				</article>
				
	</main>
	
	<footer>
		<center>
			Final 2023
		</center>
	</footer>
</body>
</html>