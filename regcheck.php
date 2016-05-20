<?php

	include("connection.php");
if(isset($_POST['name'])){
	$name = $_POST['name'];
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
}
if(isset($_POST['tel'])){
	$tel = $_POST['tel'];
}

 
    $result = mysqli_query($db, "SELECT * FROM masters WHERE email='$email'");
	   $row = $result->fetch_array();
    if (!empty($row['id'])) {
		echo "Sorry, this email have been signed. ";
		header("Location:contacts.php");
    }

    $result1 = mysqli_query($db,"INSERT INTO masters (id,name,email,tel) VALUES (null,'$name','$email','$tel')");
	$resNew = mysqli_query($db,"SELECT * FROM masters WHERE email='$email'");
	$row2 = $resNew->fetch_array();
	if($row2['email']!=$email){
		echo "Errororooor	";
	}else{
		echo "Welcome to  studio!";
		header("Location:login.php");
	}



?>