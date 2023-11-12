<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$sa = $_GET["Salary"];
	$ep = $_GET["Email_PA"];
    $sn = $_GET["Start_Name"];
	$en = $_GET["End_Name"];
    $pn = $_GET["PA_Number"];
	$st = $_GET["Street"];
    $zc = $_GET["Zip_Code"];
    $c = $_GET["City"];
    $doi = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO pa VALUES ($sa, '$ep','$sn','$en','$pn','$st','$zc','$c',NULL,$doi)")
		or die("Can not execute query");

	echo "<h3>Record inserted:</h3>Salary = $sa <br> Email PA = $ep <br> Start Name = $sn <br> End Name = $en <br> PA Number = $pn <br> Street = $st <br> Zip Code = $zc <br> City = $c <br> Doctor ID = $doi";
        
echo "<br><br><p><a href=pa_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>