<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<h1 style="text-align:center">Qualification's Record</h1>
       
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=qualifications_result.php>
  <div class="field">
    <label>Qualification Length</label>
    <input type=text name="Doc_Q_length" placeholder="Enter Length">
  </div>
  <div class="field">
    <label>Doctor's Degree</label>
    <input type=text name="Doc_Degree" placeholder="Enter Degree">
  </div>
  <div class="field">
    <label>Doctor's Institution</label>
    <input type=text name="Doc_Institution" placeholder="Enter Institution">
  </div>
  <div class="field">
    <label>Doctor's Id</label>
    <input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
  
  <button class="ui primary button" type="submit">ADD Qualification</button>    
</form>
</body>
</html>