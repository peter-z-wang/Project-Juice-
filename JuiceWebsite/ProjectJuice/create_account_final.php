<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){
        $data_missing[] = 'First Name';

    } else {
        $first_name = trim($_POST['first_name']);
    }

    if(empty($_POST['last_name'])){
        $data_missing[] = 'Last Name';
        
    } else{
		$last_name = trim($_POST['last_name']);
    }

    if(empty($_POST['username'])){
        $data_missing[] = 'username';
    } else {
        $username = trim($_POST['username']);
    }

    if(empty($_POST['password'])){
        $data_missing[] = 'password';
    } else {
        $password = trim($_POST['password']);
    }
	
	if(empty($_POST['DateOfBirth'])){
        $data_missing[] = 'Date of Birth';
    } else {
        $dob = trim($_POST['DateOfBirth']);
    }
    
    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO Users (firstName, lastName, userName, passWord, DOB) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        mysqli_stmt_bind_param($stmt, "ssssi", $first_name, $last_name, $username, $password, $dob);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
#        echo $affected_rows;
        
        if($affected_rows == 1){
            
            echo 'Account Created';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
        
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
   
}

?>
<p>
<a href="juice_home.php">Home</a>
</p>
