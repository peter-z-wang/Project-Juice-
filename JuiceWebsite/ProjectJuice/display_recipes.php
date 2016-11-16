<p>
<?php

require_once('../mysqli_connect.php');

if(isset($_POST['submit']) )
{
  if(empty($_POST['Ingredient_1']) and empty($_POST['Ingredient_2'])){
	  $errorMessage = "You forgot to select ingredients";
  }
  
  else{
  //$ingOne = "ice";
  $ingOne = $_POST['Ingredient_1'];
  $ingTwo = $_POST['Ingredient_2'];
  $errorMessage = ""; 
}
}


echo "$errorMessage";


$query = "SELECT name FROM Alcoholic WHERE ingredient_one = '$ingOne' OR ingredient_two = '$ingOne' 
OR ingredient_three = '$ingOne' OR ingredient_four = '$ingOne' OR ingredient_five = '$ingOne' OR ingredient_six = '$ingOne'
OR ingredient_seven = '$ingOne' OR ingredient_eight = '$ingOne' OR ingredient_nine = '$ingOne' OR ingredient_ten = '$ingOne'";
$response = @mysqli_query($dbc, $query);


echo '<table align="left" cellspacing="5" cellpadding="8">
<td align="left"><b>Recipes:</b></td></tr>';


if($response){
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' . 
		$row['name'] . '</td><td align="left">' . 
		'</tr>';
	}

	echo '</table>';
}

?>




</p>
