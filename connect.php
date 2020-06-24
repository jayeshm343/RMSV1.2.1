<?php
header("Access-Control-Allow-Origin: *",false);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "puzzles";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
