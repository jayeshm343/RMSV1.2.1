<?php

include "connect.php";

$name = $_POST["name"];
$email2 = $_POST["email2"];
$date1 = $_POST["date"];
$time = $_POST["time"];
$members = $_POST["members"];

$sql = "INSERT INTO reservation (name, email, date, time, people) VALUES('$name','$email2', '$date1', '$time', '$members')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
