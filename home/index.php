<?php
echo "hello world<br/>";
$con = new mysqli("sql6.freemysqlhosting.net", "sql6692394", "QeYLmJgluQ", "sql6692394");
if (!$con) {
	echo "<h1>Connection failed</h1>";
} else {
echo "success<br/>";
$q = "SELECT * FROM university";

$res = $con->query($q);

echo $res->num_rows;
$data = $res->fetch_assoc();

echo "<h1>Name: " . $data['name'] . "<br/>" .
"Location: " . $data['location'] . "<br/>" .
"ID: " . $data['id'] . "<br/>" .
"No. of courses: " . $data['courses'] . "</h1>";
}
?>
