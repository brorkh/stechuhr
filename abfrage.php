<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
</head>
<body>
<?php
// Database Connection
require("db_connection.php");

// List Date and Time
$query = "SELECT id,zeit_in,zeit_out, TIMEDIFF(zeit_out,zeit_in) AS zeit_diff FROM zeitdb ORDER BY id DESC";

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}
if (mysqli_num_rows($result) > 0) {
    $number = 1;
    $users = '<table class="table table-bordered">
        <tr>
					<th>No.</th>
					<th>Zeit In</th>
					<th>Zeit Out</th>
					<th>Std.</th>
        </tr>
    ';
	
    while ($row = mysqli_fetch_assoc($result)) {
        $users .= '<tr>
            <td>'.$number.'</td>
            <td>'.$row['zeit_in'].'</td>
			<td>'.$row['zeit_out'].'</td>
			<td>'.$row['zeit_diff'].'</td>
        </tr>';
        $number++;
    }
    $users .= '</table>';
}



?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Export Data from MySQL to CSV</title>
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <!--  Header  -->
    <div class="row">
        <div class="col-md-12">
            <h2>Zeitabfrage / CSV-Export</h2>
        </div>
    </div>
    <!--  /Header  -->

    <!--  Content   -->
    <div class="form-group">
        <?php echo $users ?>
    </div>
    <div class="form-group"><br><br>
        <button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
    </div>
    <!--  /Content   -->

    <script>
        function Export()
        {
            var conf = confirm("Export in CSV-Datei?");
            if(conf == true)
            {
                window.open("export.php", '_blank');
            }
        }
    </script>
</div>

</body>
</html>
