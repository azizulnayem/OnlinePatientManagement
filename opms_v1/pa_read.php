<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM pa" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Salary</th> <th>Email_PA</th> <th>Start_Name</th> <th>End_Name</th> <th>PA_Number</th> <th>Street</th> <th>Zip_Code</th> <th>City</th> <th>PA_ID</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Salary </td>"; 
		echo "<td> $Email_PA </td>";
		echo "<td> $Start_Name </td>";
        echo "<td> $End_Name </td>";
		echo "<td> $PA_Number </td>";
        echo "<td> $Street </td>";
		echo "<td> $Zip_Code </td>";
        echo "<td> $City </td>";
        echo "<td> $PA_ID</td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> <a href = 'pa_delete.php?
        id=$PA_ID'> Delete </a> </td>";
		echo "<td> <a href = 'pa_update_input.php? s=$Salary&ep=$Email_PA&sn=$Start_Name&en=$End_Name&pn=$PA_Number&st=$Street&zp=$Zip_Code&c=$City&id=$PA_ID&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=pa_input.php>ADD A NEW PA</a>";
?>