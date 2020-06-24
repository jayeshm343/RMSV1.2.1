<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Methods:*');

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "puzzle";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
