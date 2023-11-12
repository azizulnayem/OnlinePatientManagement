<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM qualifications" )
		or die("Can not execute query");
	echo "<table border> \n"; 
	echo "<th>Doc_Q_length</th> <th>Doc_Degree</th> <th>Doc_Institution</th> <th>Qua_ID</th> <th>Doctor_id</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Doc_Q_length </td>"; 
		echo "<td> $Doc_Degree </td>";
		echo "<td> $Doc_Institution </td>";
        echo "<td> $Qua_ID </td>";
		echo "<td> $Doctor_id</td>";
		echo "<td> <a href = 'qualifications_delete.php?
        id=$Qua_ID'> Delete </a> </td>";
		echo "<td> <a href = 'qualifications_update_input.php?
        dol=$Doc_Q_length&dd=$Doc_Degree&di=$Doc_Institution&id=$Qua_ID&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=qualifications_input.php>ADD NEW QUALIFICATION FOR A DOCTOR</a>";
?>