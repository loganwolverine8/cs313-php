
<?php
	require "shopping_site.php";
	$db = get_db();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Shopping Site</title>
</head>
<body>

	<h1> Shopping Site </h1>


	<?PHP


$statement = $db->query('SELECT product, cost, name, FROM cart');
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$product = $row['product'];
	$cost = $row['cost'];
	$name = $row['name'];
	

	echo "<p><strong>$product $cost $name</strong><p>";
} 

?>


</body>
</html>

