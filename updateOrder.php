<?php

include 'connect.php';

$value = $_GET["value"];
$order = $_GET["order"];
$tprice = $_GET["tprice"];

$sql = "INSERT INTO orders ( items, total_price) VALUES ( '$value', '$tprice')";

mysqli_query($conn, $sql);    


?> 