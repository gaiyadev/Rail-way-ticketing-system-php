<?php
session_start();
include'connect.php' ;

if(isset($_POST['submit']));{
	$firstname = mysqli_real_escape_string($con, ucfirst($_POST['fname']));
	$lastname = mysqli_real_escape_string($con, ucfirst($_POST['lname']));
	$email = mysqli_real_escape_string($con, ucfirst($_POST['email']));
	$date = mysqli_real_escape_string($con, ucfirst($_POST['date']));
	$sex = mysqli_real_escape_string($con, ucfirst($_POST['sex']));
	$sit = mysqli_real_escape_string($con, ucfirst($_POST['sit']));
	$type = mysqli_real_escape_string($con, ucfirst($_POST['type']));
	$destination = mysqli_real_escape_string($con, ucfirst($_POST['destination']));
	$time = mysqli_real_escape_string($con, ucfirst($_POST['time']));

	$id= $_SESSION['id'];

	$sql="UPDATE booking SET firstname = '$firstname', lastname = '$lastname', email = '$email', day = '$date', sex = '$sex', sit = '$sit',type = '$type',destination = '$destination',time1 = '$time'";


	$result=mysqli_query($con,$sql);

	if($result === false){
		header("location: index.php?=updatefail"."id".$_SESSION['id']);
		exit();
	}else{
		echo "<script>
		alert('you have sucessfully updated your booking');
		window.open('index.php?=sucess', '_self')
		</script>";
		exit();
	}





}









?>