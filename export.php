<?php
// Database Connection
require("db_connection.php");

// get Users
//$query = "SELECT id, zeit_in, zeit_out, ELT(DAYOFWEEK(zeit_in), 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag') AS tag, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff, (TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) AS zeit_mittag FROM zeitdb ORDER BY id ASC";
//$query = "SELECT (id = '1') AS id, zeit_in, zeit_out, ELT(DAYOFWEEK(zeit_in), 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag') AS tag, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff, (TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) AS zeit_mittag FROM zeitdb ORDER BY id ASC";

$query = "SELECT id, zeit_in, zeit_out, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff, (TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) AS zeit_mittag, ELT(DAYOFWEEK(zeit_in), 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag') AS tag, ((TIMEDIFF(zeit_out,zeit_in) - INTERVAL 1 HOUR) - INTERVAL 8 HOUR) AS zeit_us FROM zeitdb ORDER BY id ASC";

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
fputcsv($output, array('Nr', 'Zeit Beginn', 'Zeit Ende', 'Stunden','Std. abzgl. Mittag', 'Tag', 'ÜbSt'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
