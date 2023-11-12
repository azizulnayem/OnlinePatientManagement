<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM history" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Remarks</th> <th>V_Date</th> <th>V_Month</th> <th>V_Year</th> <th>H_Code</th> <th>Patient_id</th> <th>Payment_id</th>  <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Remarks </td>"; 
		echo "<td> $V_Date </td>";
		echo "<td> $V_Month </td>";
        echo "<td> $V_Year </td>";
		echo "<td> $H_Code </td>";
        echo "<td> $Patient_id</td>";
		echo "<td> $Payment_id </td>";
		echo "<td> <a href = 'history_delete.php?
        id=$H_Code'> Delete </a> </td>";
		echo "<td> <a href = 'history_update_input.php?id=$H_Code'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=history_input.php>ADD A NEW HISTORY</a>";
?>