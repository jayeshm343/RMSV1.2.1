<?php 
header('Content-type: text/xml');

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Methods:*');

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

include 'connect.php';

$sql = "SELECT * FROM menu";

if($result = mysqli_query($conn, $sql))
{
     if(mysqli_num_rows($result) > 0)
     {
           while($row = mysqli_fetch_array($result))
           {
            $node = $dom->createElement("marker");
  				  $newnode = $parnode->appendChild($node);
  				  $newnode->setAttribute("name",$row['name']);
     			  $newnode->setAttribute("price",$row['price']);
 				    $newnode->setAttribute("type",$row['type']);
          }
      }
}
else{
          echo mysqli_error($conn);
    }
ob_clean();
echo $dom->saveXML();
?>
