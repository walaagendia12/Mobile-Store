<?php

	if (isset($_POST['signup']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query = $conn->query("SELECT * FROM `customer` WHERE `email` = '$email'");
	$check = $query->num_rows;
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
			
			else
				{
					$conn->query ("INSERT INTO customer (`firstname`, `lastname`, `mobile`, `email`, `password`)
					VALUES ('$firstname', '$lastname', '$mobile', '$email', '$password')") 
					or die(mysqli_error($conn));
					$_SESSION['id'] = mysqli_insert_id($conn);	
				}				
					
}
