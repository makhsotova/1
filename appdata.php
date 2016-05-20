<?php

	include("connection.php");
if(isset($_POST['name'])){
	$name = $_POST['name'];
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
}
if(isset($_POST['number'])){
	$number = $_POST['number'];
}
if(isset($_POST['body'])){
	$body = $_POST['body'];
}

if(isset($_POST['size'])){
	$size = $_POST['size'];
}

if(isset($_POST['description'])){
	$description = $_POST['description'];
}


  

 
    $result = mysqli_query($db, "SELECT * FROM appointment WHERE name='$name'");
	   $row = $result->fetch_array();
    if (!empty($row['id'])) {
		echo "Sorry, this email have been signed. ";
	
    }

    $result1 = mysqli_query($db,"INSERT INTO appoinment (id,name,email,number) VALUES (null,'$name','$email','$number')");
	$resNew = mysqli_query($db,"SELECT * FROM appointment WHERE name='$name'");
	$row2 = $resNew->fetch_array();
	if($row2['name']!=$name){
		
		echo "We will call you back!";
	
	}

?>

<a href="index.php">Returnt to The tattooist studio</a>