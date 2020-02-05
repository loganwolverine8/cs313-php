<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?PHP
$statement = $db->query('SELECT book, chapter, verse, content, FROM scriptures');
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
</body>
</html>

