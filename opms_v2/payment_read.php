<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM payment" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Payment_id</th> <th>Payment_Date</th> <th>Old_Amount</th> <th>New_Amount</th> <th>Total_Payment</th> <th>Paid</th> <th>Unpaid</th> <th>Payment_Time</th> <th>Patient_id</th><th>Delete</th> <th>Update</th> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Payment_id </td>"; 
		echo "<td> $Payment_Date </td>";
		echo "<td> $Old_Amount </td>";
        echo "<td> $New_Amount </td>";
		echo "<td> $Total_Payment </td>";
        echo "<td> $Paid </td>";
		echo "<td> $Unpaid </td>";
        echo "<td> $Payment_Time </td>";
        echo "<td> $Patient_id </td>";
		echo "<td> <a href = 'payment_delete.php?
        id=$Payment_id'> Delete </a> </td>";
		echo "<td> <a href = 'payment_update_input.php?id=$Payment_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=payment_input.php>ADD A NEW PAYMENT</a>";
?>