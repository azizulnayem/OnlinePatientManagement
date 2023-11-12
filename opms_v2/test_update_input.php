<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
<?php
	$tn = $_GET["tn"];
	$r = $_GET["r"];
	$tin = $_GET["tin"];
    $id = $_GET["id"];
	$pid = $_GET["pid"];
	$did = $_GET["did"];
?>

<h1 style="text-align:center">Update Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=test_update_result.php>
  <div class="field">
    <label>Test Name</label>
    <input input type=text name="tn" value='<?php echo $tn; ?>'>
  </div>
  <div class="field">
    <label>Result</label>
    <input input type=text name="r" value='<?php echo $r; ?>'>
  </div>
  <div class="field">
    <label>Time Needed</label>
    <input input type=text name="tin" value='<?php echo $tin; ?>'>
  </div>
    <input type=hidden name=id value='<?php echo $id; ?>'> 
  <div class="field">
    <label>Patient's ID</label>
    <input input type=text name="pid" value='<?php echo $pid; ?>'>
  </div>
    <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="did" value='<?php echo $did; ?>'>
  </div>
  
  <button class="ui primary button" type="submit">Update</button>
</form>
</body>
</html>