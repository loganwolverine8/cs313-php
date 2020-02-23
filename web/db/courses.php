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
	<link href="course.css" rel="stylesheet" type="text/css">
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

	echo "<li><p><a href='course_notes.php?course_id=$id'>$code - $name</a></p></li>";
}
?>
	</ul>
		

</body>
</html>
