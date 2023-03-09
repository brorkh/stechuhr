<?php
echo '
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" href="./apple-touch-icon.png"/>
<title>Stechuhr</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<form action="in.php" method="POST">
    <button class="button1" name="kommen" class="click"> Kommen </button>
</form>
<form action="out.php" method="POST">
    <button class="button2" name="gehen" class="click"> Gehen </button>
</form>
<a href="abfrage.php" class="btn btn-primary">Abfrage</a>
</body>

</html>
';
?>
