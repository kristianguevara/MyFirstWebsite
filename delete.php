<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$conn = mysqli_connect("localhost", "root", "","first_db");
		$id = $_GET['id'];
		$sql="DELETE FROM list WHERE id='$id'";
		mysqli_query($conn, $sql);
		header("location: home.php");
	}
?>
