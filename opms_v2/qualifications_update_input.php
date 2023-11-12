<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
<?php
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];
	
?>

<h1 style="text-align:center">Update Record</h1>
      
 <form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=qualifications_update_result.php>

  <div class="field">
    <label>Qualification Length</label>
    <input type=text name="dol" value='<?php echo $dol; ?>'>
  </div>
  <div class="field">
    <label>Doctor's Degree</label>
    <input type=text name="dd" value='<?php echo $dd; ?>'>
  </div>
  <div class="field">
    <label>Doctor's Institution</label>
    <input type=text name="di" value='<?php echo $di; ?>'>
  </div>
<input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Doctor's ID</label>
    <input type=text name="did" value='<?php echo $did; ?>'>
  </div>
     
  <button class="ui primary button" type="submit">Update</button>       

</form>
</body>
</html>