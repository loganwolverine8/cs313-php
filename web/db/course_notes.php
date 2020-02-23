<?php

if (!isset($_GET['course_id']))
{
	die("Error, course id not specified...");
}
$course_id = htmlspecialchars($_GET['course_id']);

include('dbConnect.php');
$db = get_db();


$stmt = $db->prepare('SELECT c.code, c.name, n.content FROM note n JOIN course c ON n.course_id = c.id WHERE c.id=:id');
$stmt->bindValue(':id', $course_id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$note_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


$course_code = $notes_rows[0]['code'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>Course Notes</title>
</head>
<body>
<h1>Course Notes for <?php echo $course_code; ?></h1>
<?php
foreach ($note_rows as $note_row)
{
	$content = $note_row['content'];
	echo "<p>$content</p>";
}

?>
</body>
</html>