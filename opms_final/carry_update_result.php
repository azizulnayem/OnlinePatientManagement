<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
         <style>body {
  background-image: url('final22.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
$cd  = $_GET["cd"];
	$id = $_GET["id"];
	$dc = $_GET["dc"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE carry SET C_Days='$cd', Patient_id='$id', Diseases_Code='$dc' WHERE Patient_id = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>Carrying Days = $cd <br> Patient's ID = $id <br> Diseases Code = $dc </p>";

	
	 echo "<br><p style='margin: 0px 60px'><a href=carry_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";
?>
     <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>