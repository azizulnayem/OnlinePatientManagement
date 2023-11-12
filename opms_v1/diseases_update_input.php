
<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];
?>

<h1>Update Record</h1>

<form method=get action=diseases_update_result.php>

	Diseases Name: <input type=text name="dn" value='<?php echo $dn; ?>'>
	<p>
    <input type=hidden name=id value='<?php echo $id; ?>'> 
	Diseases Symptom: <input type=text name="ds" value='<?php echo $ds; ?>'>
	<p>
	Doctor's ID: <input type=text name="did" value='<?php echo $did; ?>'>
	<p>
	<input type=submit value=Update>
</form>