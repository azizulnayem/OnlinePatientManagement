<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM test" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Test_Name</th> <th>Result</th> <th>Time_Needed</th> <th>Test_Serial</th> <th>Patient_id</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Test_Name </td>"; 
		echo "<td> $Result </td>";
		echo "<td> $Time_Needed </td>";
        echo "<td> $Test_Serial </td>";
		echo "<td> $Patient_id </td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> <a href = 'test_delete.php?
        id=$Test_Serial'> Delete </a> </td>";
		echo "<td> <a href = 'test_update_input.php?tn=$Test_Name&r=$Result&tin=$Time_Needed&id=$Test_Serial&pid=$Patient_id&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=test_input.php>ADD A NEW TEST</a>";
?>