<?php
if(isset($_POST['kommen']))
{
$timestamp = time();
//$datum = date("d.m.Y", $timestamp);
$zeit = date("d-m-Y H:i:s",$timestamp);

// Database Connection
require("db_connection.php");

$sql = "INSERT INTO zeitdb (zeit_in, zeit_out) VALUES (now(), ' ')";

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
echo "<br>in";
}
?>