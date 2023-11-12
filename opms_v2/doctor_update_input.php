<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
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

<h1 style="text-align:center">Update Record</h1>
    
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=doctor_update_result.php>
  <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>First Name</label>
    <input type=text name="fname" value='<?php echo $fname; ?>'>
  </div>
  <div class="field">
    <label>Middle Name</label>
    <input type=text name="mname" value='<?php echo $mname; ?>'>
  </div>
  <div class="field">
    <label>Last Name</label>
    <input type=text name="lname" value='<?php echo $lname; ?>'>
  </div>
  <div class="field">
    <label>Age</label>
    <input type=text name="age" value='<?php echo $age; ?>'>
  </div>
    <div class="field">
    <label>Doctor's Number</label>
    <input type=text name="dno" value='<?php echo $dno; ?>'>
  </div>
  <div class="field">
    <label>Doctor's Email</label>
    <input type=text name="dem" value='<?php echo $dem; ?>'>
  </div>
    <div class="field">
    <label>Joining Date</label>
    <input type=text name="jdate" value='<?php echo $jdate; ?>'>
  </div>
  
  <button class="ui primary button" type="submit">Update</button>
</form>
</body>
</html>