
<?php
	require "scriptures.php";
	$db = get_db();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Scripture Resources</title>
</head>
<body>

	<h1> Scripture Resources </h1>


	<?PHP


$statement = $db->query('SELECT book, chapter, verse, content, FROM scriptures');

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$book = $row['book'];
	$chapter = $row['chapter'];
	$verse = $row['verse'];
	$content = $row['content'];

	echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
} 

?>


</body>
</html>

