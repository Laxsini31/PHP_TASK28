<!DOCTYPE html>
<html>
<head>
<title>Membership Details</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = trim($_POST['name']);
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$membership = $_POST['membership'];

if(empty($name) || empty($age) || empty($gender) || empty($email) || empty($mobile) || empty($membership))
{
    echo "<h2 class='error'>All fields are required.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
    echo "<h2 class='error'>Invalid Member Name.</h2>";
}
elseif($age < 5)
{
    echo "<h2 class='error'>Age must be at least 5 years.</h2>";
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

$memberID = "LIB".rand(1000,9999);

echo "<script>alert('Registration Successful');</script>";

echo "<h2 class='success'>Library Membership Information</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Member ID</td><td>$memberID</td></tr>";
echo "<tr><td>Member Name</td><td>$name</td></tr>";
echo "<tr><td>Age</td><td>$age</td></tr>";
echo "<tr><td>Gender</td><td>$gender</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Mobile</td><td>$mobile</td></tr>";
echo "<tr><td>Membership Type</td><td>$membership</td></tr>";
echo "<tr><td>Registration Date</td><td>".date("d-m-Y")."</td></tr>";

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