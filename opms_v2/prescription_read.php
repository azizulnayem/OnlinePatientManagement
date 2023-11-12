<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM prescription" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Prescription_no</th> <th>Direction</th> <th>Medicine</th> <th>Dose</th>  <th>Doctor_id</th> <th>Patient_id</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Prescription_no </td>"; 
		echo "<td> $Direction </td>";
		echo "<td> $Medicine </td>";
        echo "<td> $Dose </td>";
		echo "<td> $Doctor_id </td>";
        echo "<td> $Patient_id </td>";
		echo "<td> <a href = 'prescription_delete.php?
        id=$Prescription_no'> Delete </a> </td>";
		echo "<td> <a href = 'prescription_update_input.php?id=$Prescription_no'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=prescription_input.php>ADD A NEW PRESCRIPTION</a>";
?>