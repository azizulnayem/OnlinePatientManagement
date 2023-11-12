<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
<h1 style="text-align:center">Test's Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=test_result.php>
  <div class="field">
    <label>Test Name</label>
    <input input type=text name="Test_Name" placeholder="Enter Test Name">
  </div>
  <div class="field">
    <label>Result</label>
    <input input type=text name="Result" placeholder="Enter Result">
  </div>
  <div class="field">
    <label>Time Needed</label>
    <input input type=text name="Time_Needed" placeholder="Enter Times">
  </div>
  <div class="field">
    <label>Patient's ID</label>
    <input input type=text name="Patient_id" placeholder="Enter ID">
  </div>
  <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
  
  <button class="ui primary button" type="submit">ADD TEST DETAILS</button>
</form>
</body>
</html>