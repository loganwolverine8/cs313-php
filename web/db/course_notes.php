<?php

if (!isset($_GET['course_id']))
{
	die("Error, course id not specified...");
}
$course_id = htmlspecialchars($_GET['course_id']);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Course Notes</title>
</head>
<body>
<h1>Course Notes for course id <?php echo $course_id?></h1>

<p> this is a note!!!!!!!</p>
<p> this is a note!!!!!!!</p>
<p> this is a note!!!!!!!</p>
<p> this is a note!!!!!!!</p>

</body>
</html>