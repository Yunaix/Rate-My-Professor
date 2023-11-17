<?php
include 'TX22971_member.php';

	session_start();
	
	if (!isset($_SESSION['user'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: TX22971_index1.html");
	} else if(isset($_SESSION['user'])!="") {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: TX22971_index1.html");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: TX22971_index1.html");
		exit;
	}