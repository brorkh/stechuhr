<?php
if(isset($_POST['gehen']))
{
$timestamp = time();
//$datum = date("d.m.Y", $timestamp);
$zeit = date("Y-m-d H:i:s",$timestamp);

// Database Connection
require("db_connection.php");

//$sql = "INSERT INTO zeitdb (zeit_out) VALUES (now())";
$sql = "UPDATE zeitdb SET zeit_out = now() WHERE zeit_out IS NULL OR zeit_out = '0000-00-00 00:00:00'";
//$sql = "UPDATE zeitdb SET zeit_diff = TIMEDIFF(TIME(now()), zeit_in) WHERE zeit_out = '0000-00-00 00:00:00';";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

echo "<br>";
echo $timestamp;
echo "<br>";
$zeit = date("Y-m-d H:i:s",$timestamp);
echo $zeit;
echo "<br>out";
}
?>
