<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$conn=mysqli_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysqli_select_db($conn,"first_db") or die("Cannot connect to database"); //Connect to database
		$id = $_GET['id'];
		mysqli_query($conn,"DELETE FROM list WHERE id='$id'");
		header("location: home.php");
	}
?>