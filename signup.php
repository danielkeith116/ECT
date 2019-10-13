<html>
<body>
<?php
$db_c = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com	 port = 5432 dbname=d1taisgtq9v2u6 user=lwaasictcokjps 
password=7cc9f025cacf299ba7640082a90881e65a38903fc048e3dd326700b7ebf3db8f");
$fn = $_POST["fName"];
$ln = $_POST["lName"];
$em = $_POST["email"];
$pw = $_POST["password"];
$ad = $_POST["address"];
$ct = $_POST["city"];
$st = $_POST["state"];
$zc = $_POST["zipcode"];
$bm = $_POST["month"];
$bd = $_POST["day"];
$by = $_POST["year"];
$query = "INSERT INTO users VALUES ('$fn', '$ln', '$em', '$pw', '$ad', '$ct', '$st', '$zc', '$bd', '$bm', '$by')";
$result = pg_query($query); 
?>
</body>
</html>