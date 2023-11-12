<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
<h1 style="text-align:center">PA's Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=pa_result.php>
  <div class="field">
    <label>Salary</label>
    <input type=text name="Salary" placeholder="Enter Salary">
  </div>
  <div class="field">
    <label>Email PA</label>
    <input type=text name="Email_PA" placeholder="Enter Email">
  </div>
  <div class="field">
    <label>Start Name</label>
    <input type=text name="Start_Name" placeholder="Enter First Name">
  </div>
  <div class="field">
    <label>End Name</label>
    <input type=text name="End_Name" placeholder="Enter End Name">
  </div>
  <div class="field">
    <label>PA Number</label>
    <input type=text name="PA_Number" placeholder="Enter Number">
  </div>
  <div class="field">
    <label>Street</label>
    <input input type=text name="Street" placeholder="Enter Street">
  </div>
  <div class="field">
    <label>Zip Code</label>
    <input input type=text name="Zip_Code" placeholder="Enter Zip Code">
  </div>
  <div class="field">
    <label>City</label>
    <input input type=text name="City" placeholder="Enter City">
  </div>
  <div class="field">
    <label>Doctor ID</label>
    <input input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
  
  <button class="ui primary button" type="submit">ADD PA'S DETAILS</button>
</form>
</body>
</html>