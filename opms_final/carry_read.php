<html>
<head> 
    
    <title>OPMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    
    <style>body {
 background-image: url('photo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
 <h1 style="text-align:center ;color:white">Carry Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM carry" )
		or die("Can not execute query");
	echo "<table class='ui celled table'> \n"; 
	echo "<thead><tr><th>C_Days</th> <th>Patient_id</th> <th>Diseases_Code</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $C_Days </td>"; 
		echo "<td> $Patient_id </td>";
		echo "<td> $Diseases_Code </td>";
		echo "<td> <a href = 'carry_delete.php?
        id=$Patient_id'> Delete </a> </td>";
		echo "<td> <a href = 'carry_update_input.php? cd=$C_Days & id=$Patient_id & dc=$Diseases_Code'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody></table> \n";
		echo "<br><p style='margin: 0px 70px'><a href=carry_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";
	
?>
 <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>