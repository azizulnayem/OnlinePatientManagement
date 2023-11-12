<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM method" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Method_Code</th> <th>Method_Process</th> <th>Method_Used_for</th> <th>Payment_id</th><th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Method_Code </td>"; 
		echo "<td> $Method_Process </td>";
		echo "<td> $Method_Used_for </td>";
        echo "<td> $Payment_id </td>";
		echo "<td> <a href = 'method_delete.php?
        id=$Method_Code'> Delete </a> </td>";
		echo "<td> <a href = 'method_update_input.php?id=$Method_Code'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=method_input.php>ADD A NEW METHOD</a>";
?>