<?php
//if(isset($_POST['kommen']))
//{
$timestamp = time();
//$datum = date("d.m.Y", $timestamp);
$zeit = date("d-m-Y H:i:s",$timestamp);

// Database Connection
require("db_connection.php");

setlocale(LC_ALL, "de_DE.utf8");
$tag = strftime("%A");
$sql = "INSERT INTO zeitdb (zeit_in, zeit_out, tag) VALUES (now(), ' ', '$tag')";

//$sql = "SELECT id, zeit_in, zeit_out, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff, (TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) AS zeit_mittag, ELT(DAYOFWEEK(zeit_in), 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag') AS tag, ((TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) - INTERVAL 8 HOUR) AS zeit_us FROM zeitdb ORDER BY id ASC";

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
