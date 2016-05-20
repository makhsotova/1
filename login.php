<?php
/*include_once 'connection.php';

if(isset($_SESSION['name'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $tel = mysql_real_escape_string($_POST['tel']);
 $res=mysql_query("SELECT * FROM masters WHERE name='$name'");
 $row=mysql_fetch_array($name);
 if($row['tel']==md5($tel))
 {
  $_SESSION['name'] = $row['tel'];
  header("Location: admin.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}*/
?>
<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<!--- <link rel="stylesheet" href="style.css" type="text/css" />  --->
</head>
<body>
<center>
<div id="login-form">
<form method="post" action="sign.php">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="Your Name" required /></td>
</tr>
<tr>
<td><input type="password" name="tel" placeholder="Your Phone number" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<!--- http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html --->
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
