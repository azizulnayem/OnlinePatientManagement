<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
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

<h1 style="text-align:center">Update Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=pa_update_result.php>
  <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Salary</label>
    <input type=text name="s" value='<?php echo $s; ?>'>
  </div>
  <div class="field">
    <label>Email PA</label>
    <input type=text name="ep" value='<?php echo $ep; ?>'>
  </div>
  <div class="field">
    <label>Start Name</label>
    <input type=text name="sn" value='<?php echo $sn; ?>'>
  </div>
  <div class="field">
    <label>End Name</label>
    <input type=text name="en" value='<?php echo $en; ?>'>
  </div>
    <div class="field">
    <label>PA Number</label>
    <input type=text name="pn" value='<?php echo $pn; ?>'>
  </div>
  <div class="field">
    <label>Street</label>
    <input type=text name="st" value='<?php echo $st; ?>'>
  </div>
    <div class="field">
    <label>Zip Code</label>
    <input input type=text name="zp" value='<?php echo $zp; ?>'>
  </div>
  <div class="field">
    <label>City</label>
    <input input type=text name="c" value='<?php echo $c; ?>'>
  </div>
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
    <div class="field">
    <label>Doctor ID</label>
    <input input type=text name="did" value='<?php echo $did; ?>'>
  </div>
  
  <button class="ui primary button" type="submit">Update</button>
</form>
</body>
</html>