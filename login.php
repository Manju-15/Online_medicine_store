<?php
$con = mysqli_connect("localhost", "root", "", "login page")or die($mysqli_error($con));
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
	
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | login page</title>

        <link href="login.css" rel="stylesheet">
    <style>
	input[type=email]
	{
		color:black;
	}
	input[type=password]
	{
		color:black;
	}
	</style>
    </head>

    <body>
        <div class="header">
            <div class="inner-header">
                <div class="logo"> Login page</div>
                <div class="headerlink"><a href="signup.php">Sign Up</a></div>
            </div>
        </div>
		<div id="background-image">
		<div class="container">
		<h4>LOGIN</h4>
		<div>
		<form method="post" action="login_submit.php" >
		<div class="form-group">
		<input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
		</div><br>
		<div class="form-group">
		<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
		</div><br>
		<button type="submit" class="form-control" name="submit" class="btn btn-primary">Login</button>
		</form>
		</div>
        </div>
		</div>
<footer>
        <center>
            <p>Copyright &copy; Login page. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
        </center>
</footer>		
						

    </body>
</html>