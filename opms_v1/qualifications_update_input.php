
<?php
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];
	
?>

<h1>Update Record</h1>

<form method=get action=qualifications_update_result.php>

	Qualification Length: <input type=text name="dol" value='<?php echo $dol; ?>'>
	<p>
	Doctor's Degree: <input type=text name="dd" value='<?php echo $dd; ?>'>
	<p>
	Doctor's Institution: <input type=text name="di" value='<?php echo $di; ?>'>
	<p>
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
	Doctor's ID: <input type=text name="did" value='<?php echo $did; ?>'>
	<p>
	<input type=submit value=Update>
</form>