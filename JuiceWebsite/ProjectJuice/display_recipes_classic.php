<p>
<?php

require_once('../mysqli_connect.php');

if(isset($_POST['submit']) )
{
  if(empty($_POST['Ingredient_1']) and empty($_POST['Ingredient_2']) and empty($_POST['Ingredient_3']) 
  and empty($_POST['Ingredient_4']) and empty($_POST['Ingredient_5'])){
	  $errorMessage = "You forgot to select ingredients";
  }
  
  else{
  $ingOne = $_POST['Ingredient_1'];
  $ingTwo = $_POST['Ingredient_2'];
  $ingThree = $_POST['Ingredient_3'];
  $ingFour = $_POST['Ingredient_4'];
  $ingFive = $_POST['Ingredient_5'];

  $errorMessage = ""; 
}
}


echo "$errorMessage";


$query = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingOne' OR ingredient_two = '$ingOne' 
OR ingredient_three = '$ingOne' OR ingredient_four = '$ingOne' OR ingredient_five = '$ingOne' OR ingredient_six = '$ingOne'
OR ingredient_seven = '$ingOne' OR ingredient_eight = '$ingOne' OR ingredient_nine = '$ingOne' OR ingredient_ten = '$ingOne'";


$query2 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingTwo' OR ingredient_two = '$ingTwo' 
OR ingredient_three = '$ingTwo' OR ingredient_four = '$ingTwo' OR ingredient_five = '$ingTwo' OR ingredient_six = '$ingTwo'
OR ingredient_seven = '$ingTwo' OR ingredient_eight = '$ingTwo' OR ingredient_nine = '$ingTwo' OR ingredient_ten = '$ingTwo'";


$query3 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingThree' OR ingredient_two = '$ingThree' 
OR ingredient_three = '$ingThree' OR ingredient_four = '$ingThree' OR ingredient_five = '$ingThree' OR ingredient_six = '$ingThree'
OR ingredient_seven = '$ingThree' OR ingredient_eight = '$ingThree' OR ingredient_nine = '$ingThree' OR ingredient_ten = '$ingThree'";


$query4 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingFour' OR ingredient_two = '$ingFour' 
OR ingredient_three = '$ingFour' OR ingredient_four = '$ingFour' OR ingredient_five = '$ingFour' OR ingredient_six = '$ingFour'
OR ingredient_seven = '$ingFour' OR ingredient_eight = '$ingFour' OR ingredient_nine = '$ingFour' OR ingredient_ten = '$ingFour'";


$query5 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingFive' OR ingredient_two = '$ingFive' 
OR ingredient_three = '$ingFive' OR ingredient_four = '$ingFive' OR ingredient_five = '$ingFive' OR ingredient_six = '$ingFive'
OR ingredient_seven = '$ingFive' OR ingredient_eight = '$ingFive' OR ingredient_nine = '$ingFive' OR ingredient_ten = '$ingFive'";


$response = @mysqli_query($dbc, $query);
$response2 = @mysqli_query($dbc, $query2);
$response3 = @mysqli_query($dbc, $query3);
$response4 = @mysqli_query($dbc, $query4);
$response5 = @mysqli_query($dbc, $query5);


echo '<table align="left" cellspacing="5" cellpadding="8">
<td align="left"><b>Recipes:</b></td>
<td align="left"><b>Instructions:</b></td></tr>';


if($response){
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		$row['instructions'] . '</td><td align="left">' . 
		'</tr>';
	}
}

if($response2){
	while($row = mysqli_fetch_array($response2)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		$row['instructions'] . '</td><td align="left">' . 
		'</tr>';
	}	
}

if($response3){
	while($row = mysqli_fetch_array($response3)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		$row['instructions'] . '</td><td align="left">' . 
		'</tr>';
	}	
}

if($response4){
	while($row = mysqli_fetch_array($response4)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		$row['instructions'] . '</td><td align="left">' . 
		'</tr>';
	}	
}

if($response5){
	while($row = mysqli_fetch_array($response5)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		$row['instructions'] . '</td><td align="left">' . 
		'</tr>';
	}	
}




echo '</table>';



?>




</p>
