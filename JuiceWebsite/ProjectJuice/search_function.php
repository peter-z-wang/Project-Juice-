<html>
<head>
<title>Ingredient Search</title>
</head>
<body>
<form action="http://localhost:8000/Php/display_recipes.php" method="post">


<p>
Ingredients
</p>

<p>
Ingredient 1:
<select name="Ingredient_1">
  <option value="">Select...</option>
  <option value="ice">Ice</option>
  <option value="vodka">Vodka</option>
</select>
</p>


<p>
Ingredient 2:
<select name="Ingredient_2">
  <option value="">Select...</option>
  <option value="gin">Gin</option>
  <option value="vodka">Vodka</option>
</select>
</p>

<p>

<input type="submit" name="submit" value="Send" />

</p>

</form>
</body>
</html>
