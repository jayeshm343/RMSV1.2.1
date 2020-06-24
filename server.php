<?php
include "connect.php";

$sql = "SELECT * FROM orders,customer where orders.o_id=customer.o_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        echo 
        "Order ID: " . $row["o_id"]. "<br>".
        " Name: " . $row["name"]. "<br>".
        " Contact No.: " . $row["mobile"]. "<br>".
        " Address: " . $row["address"]. "<br>".
       	" Order: " . $row["items"]. "<br>".
       	" Amount: " . $row["total_price"]. "<br><br><br>"



        ;
    }
} else {
    echo "0 results";
}


?> 