<html>
<head> 
    
    <title>Doctor's Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    <h1 style="text-align:center">Patient's Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM patient" )
		or die("Can not execute query");
	echo "<table class='ui celled unstackable table'> \n"; 
	echo "<thead><tr><th>Patient_id</th> <th>Email</th> <th>DOB</th> <th>First_Name</th> <th>Middle_Name</th> <th>Last_Name</th> <th>Patient_Number</th> <th>Street</th> <th>City</th> <th>Zip_Code</th> <th>State</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Patient_id </td>"; 
        echo "<td> $Email </td>"; 
        echo "<td> $DOB </td>"; 
		echo "<td> $First_Name </td>";
		echo "<td> $Middle_Name </td>";
        echo "<td> $Last_Name </td>";
		echo "<td> $Patient_Number </td>";
        echo "<td> $Street </td>";
		echo "<td> $City </td>";
        echo "<td> $Zip_Code </td>";
        echo "<td> $State </td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> <a href = 'patient_delete.php?
        id=$Patient_id'> Delete </a> </td>";
		echo "<td> <a href = 'patient_update_input.php?id=$Patient_id&e=$Email&dob=$DOB&fn=$First_Name&mn=$Middle_Name&lm=$Last_Name&pn=$Patient_Number&st=$Street&c=$City&zc=$Zip_Code&sta=$State&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    echo "</tbody></table> \n";
	echo "<br><p><a href=patient_input.php><button class='ui primary button'>
  ADD A NEW PATIENT
</button></a></p>";
?>
</body>
</html>