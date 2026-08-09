<!DOCTYPE html>
<html>
<head>
    <title>Online Banking Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if(isset($_POST['customerid']) && isset($_POST['password']))
{

$customerid = trim($_POST['customerid']);
$password = trim($_POST['password']);

// Stored Login Details
$validCustomerID = "BANK123";
$validPassword = "Bank@123";

if($customerid == $validCustomerID && $password == $validPassword)
{

echo "<h2 class='success'>Login Successful</h2>";

echo "<table>";

echo "<tr><th>Customer Information</th><th>Details</th></tr>";

echo "<tr><td>Customer Name</td><td>Archana L</td></tr>";

echo "<tr><td>Customer ID</td><td>$validCustomerID</td></tr>";

echo "<tr><td>Account Number</td><td>123456789012</td></tr>";

echo "<tr><td>Account Type</td><td>Savings</td></tr>";

echo "<tr><td>Branch</td><td>Coimbatore</td></tr>";

echo "<tr><td>Available Balance</td><td>₹2,35,800</td></tr>";

echo "<tr><td>Login Time</td><td>".date("d-m-Y h:i:s A")."</td></tr>";

echo "</table>";

}
else
{

echo "<h2 class='error'>Invalid Customer ID or Password</h2>";

}

}
else
{

echo "<h2 class='error'>Please Login First</h2>";

}

?>

<br>

<a href="index.php">
<input type="button" value="Back">
</a>

</div>

</body>
</html>