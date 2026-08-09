<!DOCTYPE html>
<html>
<head>
    <title>Course Registration Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $regno = trim($_POST['regno']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $course = $_POST['course'];
    $mode = $_POST['mode'];

    if(empty($name) || empty($regno) || empty($email) || empty($phone) || empty($course) || empty($mode))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Student Name.</h2>";
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<h2 class='error'>Invalid Email Address.</h2>";
    }

    elseif(!preg_match("/^[0-9]{10}$/",$phone))
    {
        echo "<h2 class='error'>Phone Number must contain exactly 10 digits.</h2>";
    }

    else
    {
        echo "<script>alert('Course Registration Successful');</script>";

        echo "<h2 class='success'>Registration Successful</h2>";

        echo "<table>";

        echo "<tr>
                <th>Field</th>
                <th>Details</th>
              </tr>";

        echo "<tr><td>Student Name</td><td>$name</td></tr>";
        echo "<tr><td>Register Number</td><td>$regno</td></tr>";
        echo "<tr><td>Email Address</td><td>$email</td></tr>";
        echo "<tr><td>Phone Number</td><td>$phone</td></tr>";
        echo "<tr><td>Selected Course</td><td>$course</td></tr>";
        echo "<tr><td>Training Mode</td><td>$mode</td></tr>";

        echo "</table>";

        echo "<br>";

        echo "<p class='success'><b>Your course registration has been completed successfully.</b></p>";
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