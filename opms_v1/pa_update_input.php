
<?php
	$s  = $_GET["s"];
	$ep = $_GET["ep"];
	$sn = $_GET["sn"];
    $en = $_GET["en"];
	$pn = $_GET["pn"];
	$st = $_GET["st"];
    $zp= $_GET["zp"];
    $c = $_GET["c"];
    $id= $_GET["id"];
    $did = $_GET["did"];
?>

<h1>Update Record</h1>

<form method=get action=pa_update_result.php>


	Salary: <input type=text name="s" value='<?php echo $s; ?>'>
	<p>
	Email PA: <input type=text name="ep" value='<?php echo $ep; ?>'>
	<p>
    Start Name: <input type=text name="sn" value='<?php echo $sn; ?>'>
	<p>
	End Name: <input type=text name="en" value='<?php echo $en; ?>'>
	<p>
	PA Number: <input type=text name="pn" value='<?php echo $pn; ?>'>
	<p>
	Street: <input type=text name="st" value='<?php echo $st; ?>'>
	<p>
	Zip Code: <input type=text name="zp" value='<?php echo $zp; ?>'>
	<p>
    City: <input type=text name="c" value='<?php echo $c; ?>'>
        
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
        
    <br> Doctor ID: <input type=text name="did" value='<?php echo $did; ?>'>
	<p>
	<input type=submit value=Update>
</form>