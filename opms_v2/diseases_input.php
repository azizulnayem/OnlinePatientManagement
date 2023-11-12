<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
  
<h1 style="text-align:center">Diseases Record</h1>      
        
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=diseases_result.php>
  <div class="field">
    <label>Diseases Name</label>
    <input input type=text name="Diseases_Name" placeholder="Enter Name">
  </div>
  <div class="field">
    <label>Diseases Symptom</label>
    <input input type=text name="Diseases_Symptom" placeholder="Enter Symptom">
  </div>
  <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
    
  <button class="ui primary button" type="submit">ADD DISEASES DETAILS</button>
</form>
</body>
</html>