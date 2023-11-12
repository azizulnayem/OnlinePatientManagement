<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM chamber" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Chamber_Rent</th> <th>Chamber_no</th> <th>location</th> <th>Available_Time</th> <th>Telephone_no</th> <th>Doctor_id</th> <th>PA_ID</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Chamber_Rent </td>"; 
		echo "<td> $Chamber_no </td>";
		echo "<td> $location </td>";
        echo "<td> $Available_Time </td>";
		echo "<td> $Telephone_no </td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> $PA_ID </td>";
		echo "<td> <a href = 'chamber_delete.php?
        id=$Chamber_no'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$Chamber_no'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=chamber_input.php>ADD A NEW CHAMBER</a>";
?>