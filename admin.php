<?php
include "connection.php" ;
$sql = "SELECT * FROM appointment";
$res = $db->query($sql);
while($row = $res->fetch_array()){
	echo '
	<table>
	<tr><th>ID</th> <th>Name</th> <th>Email</th> <th>Number</th>  <th>Part of body</th><th> Size </th> <th> Description </th></tr>
	<tr>
		<td> '.$row['id'].'</td>
		<td> '.$row['name'].'</td>
		<td> '.$row['email'].'</td>
		<td> '.$row['number'].'</td>
		<td> '.$row['body'].'</td>
		<td> '.$row['size'].'</td>
		<td> '.$row['description'].'</td>
	</tr></table> '; }?>