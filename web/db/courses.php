<?php
include('dbConnect.php');
$db = get_db();


$query = 'SELECT id, code, name FROM course';
$stmt = $db->prepare($query);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Courses</h1>

	<ul>
<?php

foreach ($courses as $course)
{
	$id = $course['id'];
	$code = $course['code'];
	$name = $course['name'];

	echo "<li><p>$code - $name</p></li>";
}
?>
	</ul>
		

</body>
</html>
