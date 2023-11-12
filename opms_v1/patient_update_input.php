
<?php
	$id  = $_GET["id"];
	$e = $_GET["e"];
	$dob = $_GET["dob"];
    $fn = $_GET["fn"];
	$mn = $_GET["mn"];
	$lm = $_GET["lm"];
    $pn = $_GET["pn"];
    $st = $_GET["st"];
    $c = $_GET["c"];
    $zc = $_GET["zc"];
    $sta = $_GET["sta"];
    $did = $_GET["did"];
?>

<h1>Update Record</h1>

<form method=get action=patient_update_result.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	Email: <input type=text name="e" value='<?php echo $e; ?>'>
	<p>
	DOB: <input type=text name="dob" value='<?php echo $dob; ?>'>
	<p>
    First Name: <input type=text name="fn" value='<?php echo $fn; ?>'>
	<p>
    Middle Name: <input type=text name="mn" value='<?php echo $mn; ?>'>
	<p>
	Last Name: <input type=text name="lm" value='<?php echo $lm; ?>'>
	<p>
	Patient's Number: <input type=text name="pn" value='<?php echo $pn; ?>'>
	<p>
	Street: <input type=text name="st" value='<?php echo $st; ?>'>
	<p>
	City: <input type=text name="c" value='<?php echo $c; ?>'>
	<p>
    Zip Code: <input type=text name="zc" value='<?php echo $zc; ?>'>
	<p>
    State: <input type=text name="sta" value='<?php echo $sta; ?>'>
	<p>
    Doctor's ID: <input type=text name="did" value='<?php echo $did; ?>'>
	<p>
	<input type=submit value=Update>
</form>