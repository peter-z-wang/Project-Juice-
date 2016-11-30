<?php

require_once('../mysqli_connect.php');

$query = "INSERT INTO Users (firstName, lastName, userName, passWord, DOB) VALUES ('uh', 'uh', 'uh', 'uh', 'Jan 10, 1990')";

$response0 = @mysqli_query($dbc, $query);

if(response0){
	echo 'Response0 received';
}
else{
	echo 'Failed to receive response0';
}


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
