<?php
$timestamp = time();
$zeit = date("d-m-Y H:i:s",$timestamp);

// Database Connection
require("db_connection.php");

setlocale(LC_ALL, "de_DE.utf8");
$tag = strftime("%A");
$sql = "INSERT INTO zeitdb (zeit_in, zeit_out, tag) VALUES (now(), ' ', '$tag')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

echo "<br>";
echo $timestamp;
echo "<br>";
$zeit = date("d-m-Y H:i:s",$timestamp);
echo $zeit;
echo "<br>";
echo $tag;
echo "<br>in";
//}
?>
