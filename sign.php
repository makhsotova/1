<?php
session_start();
$db = mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("tattooist", $db);
if(isset($_POST['name']) and $_POST['tel']){
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$sql=mysql_query("SELECT * FROM masters WHERE name='$name' AND tel='$tel'");
	$myrow=mysql_fetch_array($sql);
	if( $myrow['name']==$name ){
		if($myrow['tel']==$tel){
				echo "Nice";
				header("location:admin.php");
		}else {
			echo "Your password is inncorrect";
		}
	}else{
		echo "U don't have an acc dude";
	}
}