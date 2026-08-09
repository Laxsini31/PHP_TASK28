<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Confirmation</title>
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
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $blood = $_POST['blood'];
    $address = trim($_POST['address']);

    // Required Field Validation
    if(empty($name) || empty($age) || empty($gender) || empty($phone) || empty($email) || empty($blood) || empty($address))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    // Name Validation
    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Patient Name.</h2>";
    }

    // Age Validation
    elseif($age < 1 || $age > 120)
    {
        echo "<h2 class='error'>Age must be between 1 and 120.</h2>";
    }

    // Phone Validation
    elseif(!preg_match("/^[0-9]{10}$/",$phone))
    {
        echo "<h2 class='error'>Phone Number must contain exactly 10 digits.</h2>";
    }

    // Email Validation
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<h2 class='error'>Invalid Email Address.</h2>";
    }

    else
    {
        echo "<script>alert('Patient Registered Successfully');</script>";

        echo "<h2 class='success'>Patient Registration Successful</h2>";

        echo "<table>";

        echo "<tr>
                <th>Field</th>
                <th>Details</th>
              </tr>";

        echo "<tr><td>Patient Name</td><td>$name</td></tr>";
        echo "<tr><td>Age</td><td>$age</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Phone Number</td><td>$phone</td></tr>";
        echo "<tr><td>Email Address</td><td>$email</td></tr>";
        echo "<tr><td>Blood Group</td><td>$blood</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";

        echo "</table>";

        echo "<br>";
        echo "<p class='success'><b>Patient registration has been completed successfully.</b></p>";
    }
}

?>

<br>

<a href="index.php">
    <input type="button" value="Back to Registration Form">
</a>

</div>

</body>
</html>