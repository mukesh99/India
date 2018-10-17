<?php
	include"dbconnect.php";
	
	if(count($_POST)>0){

		$id=$_POST['id'];
		$user_type=$_POST['user_type'];

		$sql="update user SET dname='$user_type' where id=$id";
		// print_r($sql);

		mysqli_query($conn, $sql);
		
		header("location:user_details.php");
	}
?>
