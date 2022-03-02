<?php
$con = mysqli_connect("localhost", "root", "", "login page")or die($mysqli_error($con));
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$birthdate = $_POST['Birth_Date'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$phone_no = $_POST['phone'];
$address = $_POST['address'];

$query = "SELECT email FROM login WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    /*$m = "<span class='red'>Email Already Exists</span>";
    header('location:signup.php?m1=' . $m);*/
	$errorr= "<span class='red'>Email Already Exists</span>";
    echo "$errorr";
	
  } 
  else {  
    $query = "INSERT INTO login(email, password, name ,birthdate, gender, age, weight, phone_no, address)VALUES('" . $email . "','" . $password . "','" . $name . "','" . $birthdate . "','" . $gender . "','" . $age . "','" . $weight . "','" . $phone_no . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $_SESSION['email'] = $email;
    header("Location:http://localhost/login1/login.php");
	die();
  }

?>