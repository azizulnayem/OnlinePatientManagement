<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM blood" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Blood_Group</th> <th>Quantity_Blood</th> <th>Donor_ID</th> <th>Number_of_donations</th> <th>Patient_id</th>  <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Blood_Group </td>"; 
		echo "<td> $Quantity_Blood</td>";
		echo "<td> $Donor_ID </td>";
        echo "<td> $Number_of_donations </td>";
		echo "<td> $Patient_id </td>";
		echo "<td> <a href = 'blood_delete.php?
        id=$Donor_ID'> Delete </a> </td>";
		echo "<td> <a href = 'blood_update_input.php?id=$Donor_ID'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=blood_input.php>ADD A NEW BLOOD DETAILS</a>";
?>