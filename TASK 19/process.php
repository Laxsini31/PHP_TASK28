<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmation</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$mobile=trim($_POST['mobile']);
$email=trim($_POST['email']);
$package=$_POST['package'];
$persons=$_POST['persons'];
$date=$_POST['traveldate'];

if(empty($name)||empty($mobile)||empty($email)||empty($package)||empty($persons)||empty($date))
{
echo "<h2 class='error'>All fields are required.</h2>";
}

elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
echo "<h2 class='error'>Invalid Customer Name.</h2>";
}

elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
echo "<h2 class='error'>Mobile Number must contain 10 digits.</h2>";
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo "<h2 class='error'>Invalid Email Address.</h2>";
}

else
{

switch($package)
{
case "Ooty Tour":
$price=8000;
break;

case "Goa Tour":
$price=15000;
break;

case "Kerala Tour":
$price=18000;
break;

case "Kashmir Tour":
$price=25000;
break;

default:
$price=0;
}

$total=$price*$persons;

echo "<script>alert('Booking Successful');</script>";

echo "<h2 class='success'>Booking Confirmation</h2>";

echo "<table>";

echo "<tr><th>Details</th><th>Information</th></tr>";

echo "<tr><td>Customer Name</td><td>$name</td></tr>";

echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";

echo "<tr><td>Email</td><td>$email</td></tr>";

echo "<tr><td>Travel Package</td><td>$package</td></tr>";

echo "<tr><td>Travel Date</td><td>$date</td></tr>";

echo "<tr><td>Travelers</td><td>$persons</td></tr>";

echo "<tr><td>Total Amount</td><td>₹ ".number_format($total,2)."</td></tr>";

echo "</table>";

}

}

?>

<br><br>

<a href="index.php">
<input type="button" value="Book Another Package">
</a>

</div>

</body>
</html>