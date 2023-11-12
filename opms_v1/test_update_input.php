
<?php
	$tn = $_GET["tn"];
	$r = $_GET["r"];
	$tin = $_GET["tin"];
    $id = $_GET["id"];
	$pid = $_GET["pid"];
	$did = $_GET["did"];
?>

<h1>Update Record</h1>

<form method=get action=test_update_result.php>

	
	Test Name: <input type=text name="tn" value='<?php echo $tn; ?>'>
	<p>
	Result: <input type=text name="r" value='<?php echo $r; ?>'>
	<p>
	Time Needed: <input type=text name="tin" value='<?php echo $tin; ?>'>
	<p>
    <input type=hidden name=id value='<?php echo $id; ?>'> 
	Patient's ID: <input type=text name="pid" value='<?php echo $pid; ?>'>
	<p>
	Doctor's ID: <input type=text name="did" value='<?php echo $did; ?>'>
	<p>
	<input type=submit value=Update>
</form>