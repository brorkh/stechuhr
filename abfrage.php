<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://omvs.de/js/jquery-3.6.1.min.js"></script>
<script src="https://omvs.de/js/momentjs.js"></script>
<script src="https://omvs.de/zeit/sum.js"></script>
<meta charset="UTF-8">
</head>
<body>
<?php
// Database Connection
require("db_connection.php");

// List Date and Time
$query = "SELECT id, zeit_in, zeit_out, zeit_diff, zeit_mittag, tag , zeit_us FROM zeitdb ORDER BY id ASC";
$query1 = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(zeit_us))) AS total FROM zeitdb";

//Gesamtzeit berechnen:
//$query = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(`zeit_us`))) AS zeit_summe FROM zeitdb;";

// modified
//$query = "SELECT id, zeit_in, zeit_out, zeit_diff, zeit_mittag, tag , zeit_us, SEC_TO_TIME(SUM(TIME_TO_SEC(`zeit_us`))) AS zeit_summe FROM zeitdb ORDER BY id ASC";

if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}
if (mysqli_num_rows($result) > 0) {
    $number = 1;
    $users = '<table class="table table-bordered" id="timelist">
        <tr>
					<th>No.</th>
					<th>Zeit In</th>
					<th>Zeit Out</th>
					<th>Tag</th>
					<th>Std.</th>
					<th>Abzgl. Mittag</th>
					<th>Üb.St.</th>
        </tr>
    ';
	
    while ($row = mysqli_fetch_assoc($result)) {
        $users .= '<tr>
            <td>'.$number.'</td>
            <td>'.$row['zeit_in'].'</td>
			<td>'.$row['zeit_out'].'</td>
			<td>'.$row['tag'].'</td>
			<td>'.$row['zeit_diff'].'</td>
			<td>'.$row['zeit_mittag'].'</td>
			<td>'.$row['zeit_us'].'</td>
        </tr>';
        $number++;
    }
	$users .= '';
}



?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Export Data from MySQL to CSV</title>
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="tstyle.css"/>
	<script>
	
	
	
	</script>
</head>
<body>
<div class="container" style="margin-left:0px;">
    <!--  Header  -->
    <div class="row">
        <div class="col-md-12">
			<h2>Zeitabfrage / CSV-Export</h2>
        </div>
    </div>
    <!--  /Header  -->

    <!--  Content   -->
    <div class="form-group tom">
        <?php echo $users ?>
		<?php
		$result1 = $con->query($query1);
		$row1 = $result1->fetch_assoc();
		echo '<tr><td></td><td></td><td></td><td></td><td></td><td>Total:</td><td><input type="text" value="'.$row1["total"].'"</td></tr>';
		?>
	</div>
    <div class="form-group">
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

<script>
		
//const result = [...document.querySelectorAll('#timelist .duration')].reduce((a, {value}) => {
//  const [hh, mm] = value.split(':').map(Number);
//  return a + hh * 60 + mm;
//}, 0);

//const mm = result%60, hh = (result-mm)/60;
//document.getElementById('totalduration').value = `${hh.toString().padStart(2, 0)}:${mm.toString().padStart(2, 0)}`;

</script>

</body>
</html>
