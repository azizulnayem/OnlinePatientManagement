<html>
<head> 
    
    <title>Doctor's Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    <h1 style="text-align:center">Diseases Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM diseases" )
		or die("Can not execute query");
	echo "<table class='ui celled unstackable table'> \n"; 
	echo "<thead><tr><th>Diseases_Name</th> <th>Diseases_Code</th> <th>Diseases_Symptom</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Diseases_Name </td>"; 
		echo "<td> $Diseases_Code </td>";
		echo "<td> $Diseases_Symptom</td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> <a href = 'diseases_delete.php?
        id=$Diseases_Code'> Delete </a> </td>";
		echo "<td> <a href = 'diseases_update_input.php?dn=$Diseases_Name&id=$Diseases_Code&ds=$Diseases_Symptom&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    
    echo "</tbody></table> \n";
	echo "<br><p><a href=diseases_input.php><button class='ui primary button'>
  ADD A NEW DISEASES
</button></a></p>";
?>
</body>
</html>	