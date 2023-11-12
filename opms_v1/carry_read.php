<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM carry" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>C_Days</th> <th>Patient_id</th> <th>Diseases_Code</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $C_Days </td>"; 
		echo "<td> $Patient_id </td>";
		echo "<td> $Diseases_Code </td>";
		echo "<td> <a href = 'carry_delete.php?
        id=$Patient_id'> Delete </a> </td>";
		echo "<td> <a href = 'carry_update_input.php?id=$Patient_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=carry_input.php>ADD A NEW CARRY</a>";
?>