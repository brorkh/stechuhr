<?php
//if(isset($_POST['gehen']))
//{
$timestamp = time();

// Database Connection
require("db_connection.php");

$sql = "UPDATE zeitdb SET zeit_out = now(), zeit_diff = TIMEDIFF(now(),zeit_in), zeit_mittag = (TIMEDIFF(now(),zeit_in) - INTERVAL 1 HOUR), zeit_us = ((TIMEDIFF(now(),zeit_in) - INTERVAL 1 HOUR) - INTERVAL 8 HOUR) WHERE zeit_out IS NULL OR zeit_out = '0000-00-00 00:00:00'";

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
//}
?>
