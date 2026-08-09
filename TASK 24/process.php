<!DOCTYPE html>
<html>
<head>
<title>Employee Profile</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$empid=trim($_POST['empid']);
$department=$_POST['department'];
$designation=trim($_POST['designation']);
$email=trim($_POST['email']);
$mobile=trim($_POST['mobile']);

if(empty($name)||empty($empid)||empty($department)||empty($designation)||empty($email)||empty($mobile))
{
echo "<h2 class='error'>All fields are required.</h2>";
}

elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
echo "<h2 class='error'>Invalid Employee Name.</h2>";
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo "<h2 class='error'>Invalid Email Address.</h2>";
}

elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
}

else
{

echo "<script>alert('Employee Profile Generated Successfully');</script>";

echo "<h2 class='success'>Employee Profile Information</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Information</th></tr>";

echo "<tr><td>Employee Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$empid</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Designation</td><td>$designation</td></tr>";
echo "<tr><td>Email Address</td><td>$email</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";

echo "</table>";

}

}

?>

<br><br>

<a href="index.php">
<input type="button" value="Back">
</a>

</div>

</body>
</html>