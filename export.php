<?php
// Database Connection
require("db_connection.php");

// get Users
$query = "SELECT id,zeit_in,zeit_out, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff FROM zeitdb ORDER BY id ASC";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Zeiten.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Nr', 'Zeit_In', 'Zeit_Out', 'Zeit_Diff'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>