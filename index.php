<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" href="./apple-touch-icon.png"/>
<title>Stechuhr</title>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
body {
 background-color: #000;
 color: #fff;
}

.button1 {
 background-color: #494;
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 40px;
 width: 300px;
}
.button1:hover {
 background-color: #444;
}
.button2 {
 background-color: #944;
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 40px;
 width: 300px;
}
.button2:hover {
 background-color: #444;
}

</style>

</head>
<body>
	
<form action="in.php" method="POST">
    <button class="button1" name="kommen" class="click"> Kommen </button>
</form>
<form action="out.php" method="POST">
    <button class="button2" name="gehen" class="click"> Gehen </button>
</form>

<a href="abfrage.php">Abfrage</a>

</body>
</html>

