<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM doctor" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Doctor_id</th> <th>First_Name</th> <th>Middle_Name</th> <th>Last_Name</th> <th>Age</th> <th>Doctor_Number</th> <th>Doctor_Email</th> <th>Joining_Date</th> <th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Doctor_id </td>"; 
		echo "<td> $First_Name </td>";
		echo "<td> $Middle_Name </td>";
        echo "<td> $Last_Name </td>";
		echo "<td> $Age </td>";
        echo "<td> $Doctor_Number </td>";
		echo "<td> $Doctor_Email </td>";
        echo "<td> $Joining_Date </td>";
		echo "<td> <a href = 'doctor_delete.php?
        id=$Doctor_id'> Delete </a> </td>";
		echo "<td> <a href = 'doctor_update_input.php?id=$Doctor_id&fname=$First_Name&mname=$Middle_Name&lname=$Last_Name&age=$Age&dno=$Doctor_Number&dem=$Doctor_Email&jdate=$Joining_Date'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=doctor_input.php>ADD A NEW DOCTOR</a>";
?>