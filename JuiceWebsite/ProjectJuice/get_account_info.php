<?php
require_once('../mysqli_connect.php');

$query = "SELECT firstName, lastName, userName, passWord, DOB FROM students";

$response = @mysqli_query($dbc, $query);

if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Username</b></td>
<td align="left"><b>Password</b></td>
<td align="left"><b>Date of Birth</b></td>

while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['firstName'] . '</td><td align="left">' . 
$row['lastName'] . '</td><td align="left">' .
$row['userName'] . '</td><td align="left">' . 
$row['passWord'] . '</td><td align="left">' .
$row['DOB'] . '</td><td align="left">' . 
echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

mysqli_close($dbc);

?>
