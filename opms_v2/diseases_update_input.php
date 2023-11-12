<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];
?>

<h1 style="text-align:center">Update Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=diseases_update_result.php>
  <div class="field">
    <label>Diseases Name</label>
    <input input type=text name="dn" value='<?php echo $dn; ?>'>
  </div>
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Diseases Symptom</label>
    <input input type=text name="ds" value='<?php echo $ds; ?>'>
  </div>
  <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="did" value='<?php echo $did; ?>'>
  </div>
  
  <button class="ui primary button" type="submit">Update</button>
</form>
</body>
</html>