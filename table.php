
<?php

include "connect.php";



$sql="CREATE TABLE newsletter ( 
	email VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) 
{
    echo "Table created successfully";
} 
else 
{
    echo "Error creating table: " . mysqli_error($conn);
}


?>
