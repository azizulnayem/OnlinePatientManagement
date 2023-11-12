<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
<h1 style="text-align:center">Doctor's Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=doctor_result.php>
  <div class="field">
    <label>First Name</label>
    <input type=text name="First_Name" placeholder="Enter First Name">
  </div>
  <div class="field">
    <label>Middle Name</label>
    <input type=text name="Middle_Name" placeholder="Enter Middle Name">
  </div>
  <div class="field">
    <label>Last Name</label>
    <input type=text name="Last_Name" placeholder="Enter Last Name">
  </div>
  <div class="field">
    <label>Age</label>
    <input type=text name="Age" placeholder="Enter Age">
  </div>
  <div class="field">
    <label>Doctor's Number</label>
    <input type=text name="Doctor_Number" placeholder="Enter Doctor's Number">
  </div>
  <div class="field">
    <label>Doctor's Email</label>
    <input type=text name="Doctor_Email" placeholder="Enter Doctor's Email">
  </div>
  <div class="field">
    <label>Joining Date</label>
    <input type=text name="Joining_Date" placeholder="Enter Joining Date">
  </div>
  
  <button class="ui primary button" type="submit">ADD DOCTOR'S DETAILS</button>
</form>
</body>
</html>