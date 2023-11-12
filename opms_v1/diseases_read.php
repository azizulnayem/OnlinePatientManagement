<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM diseases" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Diseases_Name</th> <th>Diseases_Code</th> <th>Diseases_Symptom</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th> \n";
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
	echo "</table> \n";
	echo "<p><a href=diseases_input.php>ADD A NEW DISEASES</a>";
?>