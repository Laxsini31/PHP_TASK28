<!DOCTYPE html>
<html>
<head>
<title>Registration Success</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$customerid=trim($_POST['customerid']);
$email=trim($_POST['email']);
$mobile=trim($_POST['mobile']);
$address=trim($_POST['address']);
$city=trim($_POST['city']);

if(empty($name)||empty($customerid)||empty($email)||empty($mobile)||empty($address)||empty($city))
{
echo "<h2 class='error'>All fields are required.</h2>";
}

elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
echo "<h2 class='error'>Customer Name should contain only alphabets and spaces.</h2>";
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

echo "<script>alert('Customer Registration Successful');</script>";

echo "<h2 class='success'>Customer Registered Successfully</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Customer Name</td><td>$name</td></tr>";
echo "<tr><td>Customer ID</td><td>$customerid</td></tr>";
echo "<tr><td>Email Address</td><td>$email</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
echo "<tr><td>Address</td><td>$address</td></tr>";
echo "<tr><td>City</td><td>$city</td></tr>";
echo "<tr><td>Registration Date</td><td>".date("d-m-Y")."</td></tr>";

echo "</table>";

}

}

?>

<br><br>

<a href="index.php">
<input type="button" value="Back to Registration">
</a>

</div>

</body>
</html>