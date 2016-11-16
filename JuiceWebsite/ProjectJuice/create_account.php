<?php

require_once('../mysqli_connect.php');

$query = "INSERT INTO Users (firstName, lastName, userName, passWord, DOB) VALUES ('TestFirst', 'TestLast', 'TestUser', 'TestPass', 'Jan 10, 1990')";

$response0 = @mysqli_query($dbc, $query);

if(response0){
	echo 'Response0 received ';
}
else{
	echo 'Failed to receive response0';
}


echo '<table align="left" cellspacing="5" cellpadding="8">
<tr><td align="left"><b>First Name</b></td>

<td align="left"><b>Last Name</b></td>

<td align="left"><b>Username</b></td>

<td align="left"><b>Password</b></td>

<td align="left"><b>Birth Day</b></td></tr>';



$query = "SELECT firstName, lastName, userName, passWord, DOB FROM Users";

$response = @mysqli_query($dbc, $query);

if($response){

	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' . 
		$row['firstName'] . '</td><td align="left">' . 
		$row['lastName'] . '</td><td align="left">' .
		$row['userName'] . '</td><td align="left">' . 
		$row['passWord'] . '</td><td align="left">' .
		$row['DOB'] . '</td><td align="left">' . 
		'</tr>';
	}

	echo '</table>';
}
else{
	echo 'Failed to receive response';
}

?>
