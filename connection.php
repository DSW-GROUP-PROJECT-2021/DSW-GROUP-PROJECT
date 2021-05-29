<?php

$server = "localhost";
$username = "root";
$password ="";
$db_name = "project";

$conn = mysqli_connect($server,$username,$password,$db_name);


if(isset($_POST['submit'])){
		$fullname= $_POST['fullname'];
		$email = $_POST['email'];
		$username= $_POST['username'];
		$Password = $_POST['Password'];
		$Cpassword = isset($_POST['password']);

		$query = "INSERT INTO registration(fullname, email, Username, Password, CPassword) VALUES('$fullname','$email','$username','$Password','$Cpassword')";
		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			echo "successfully submitted, please go back to main page";

		}
		else{
			echo "form not submitted";
		}

}
?>



