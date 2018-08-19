<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
	{
		$conn = mysqli_connect("localhost", "root", "","first_db");
		$details = mysqli_real_escape_string($conn,$_POST['details']);
		$time = strftime("%X");//time
		$date = strftime("%B %d, %Y");//date
		$decision ="no";

		
		foreach($_POST['public'] as $each_check) //gets the data from the checkbox
 		{
 			if($each_check !=null ){ //checks if the checkbox is checked
 				$decision = "yes"; //sets teh value
 			}
 		}
		
		$sql="INSERT INTO list (details, date_posted, time_posted, public) VALUES ('$details','$date','$time','$decision')";
		mysqli_query($conn, $sql);
		header("location: home.php");
	}
	else
	{
		header("location:home.php"); //redirects back to hom
	}
?>
