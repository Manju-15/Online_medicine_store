<?php
$con = mysqli_connect("localhost", "root", "", "login page")or die($mysqli_error($con));
session_start();
?>
<! DOCTYPE html>
<html>
<head>
    <h3>WELCOME TO OUR CARE PLUS PHARMACY</h3>
    <title>SIGN UP FORM</title>
    <link rel="Stylesheet" href="signup.css">
</head>
<body>
<div class="signup-page">
    <center><h1>SIGN UP<h1></center><br>
	<div id="background-image">
	<form  id="det" method="POST" action="signup_submit.php">
	    <b> First Name: </b><br>  
        <input type="text" id="detail" name="name" placeholder= "Name" size="50" required="true"><br><br>  
	    <b> Email_id: </b><br>  
        <input type="text" id="detail" value="" name="email" placeholder="Username" size="50" required="true"><br><br>
		<b>Password:</b><br>
        <input type="password" id="detail" value="" name="password" placeholder="Password" size="50" required="true"><br><br>
        <b> Birth Date: </b><br> 
        <input type="date" id="detail" name="Birth_Date" placeholder="Enter DOB" size="50" required="true"><br><br>
        <b>Gender:</b><br>
        <input type="radio" id="detail" value="Male" name="gender" checked > Male  
        <input type="radio" id="detail" value="Female" name="gender"> Female  
        <input type="radio" id="detail" value="Other" name="gender"> Other<br><br>  		
        <b>Age: </b><br>    
        <input type="text" id="detail" name="age" placeholder="Enter AGE" size="50" required="true"><br><br>  
        <b>Weight:</b><br>
        <input type="number" id="detail" name="weight" placeholder="Enter Weight" size="50" required="true"><br><br>
		<b>Phone_No:</b><br>
		<input type="text" id="detail" name="phone" placeholder="phone no."  value="+91" size="50"/ required="true"><br><br>
        <b>Current_Address:</b><br>
        <textarea cols="80" rows="8" id="detail" placeholder="Current Address" name="address" value="address" required="true"></textarea><br><br>		
        <button type="submit" class="form-control" name="submit" class="btn btn-primary">submit</button>
	</form>	
</div>
</body>

</html>