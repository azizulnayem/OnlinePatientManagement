
<?php
	$id  = $_GET["id"];
	$fname = $_GET["fname"];
	$mname = $_GET["mname"];
    $lname = $_GET["lname"];
	$age = $_GET["age"];
	$dno = $_GET["dno"];
    $dem = $_GET["dem"];
    $jdate = $_GET["jdate"];
?>

<h1>Update Record</h1>

<form method=get action=doctor_update_result.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	First Name: <input type=text name="fname" value='<?php echo $fname; ?>'>
	<p>
	Middle Name: <input type=text name="mname" value='<?php echo $mname; ?>'>
	<p>
	Last Name: <input type=text name="lname" value='<?php echo $lname; ?>'>
	<p>
	Age: <input type=text name="age" value='<?php echo $age; ?>'>
	<p>
	Doctor's Number: <input type=text name="dno" value='<?php echo $dno; ?>'>
	<p>
	Doctor's Email: <input type=text name="dem" value='<?php echo $dem; ?>'>
	<p>
    Joining Date: <input type=text name="jdate" value='<?php echo $jdate; ?>'>
	<p>
	<input type=submit value=Update>
</form>