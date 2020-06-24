<?php

include "connect.php"; 

$email = $_POST["email1"]; 

$sql = "INSERT INTO newsletter (email) VALUES('$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>