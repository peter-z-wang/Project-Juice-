<?php
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'juice_populate');
define('DB_USER','emma');
define('DB_PASSWORD','password');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
//$db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysqli_error());

$ID = $_POST['user'];
$Password = $_POST['pass'];

function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	
	$query = mysqli_query("SELECT *  FROM Users where userName = '$_POST[user]' AND passWord = '$_POST[pass]'") or die(mysqli_error());
	$row = mysqli_fetch_array($query) or die(mysqli_error());
	if(!empty($row['userName']) AND !empty($row['passWord']))
	{
		$_SESSION['userName'] = $row['passWord'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
