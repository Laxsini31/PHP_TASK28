<!DOCTYPE html>
<html>
<head>
    <title>Generated Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

function generatePassword($length)
{
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $digits = "0123456789";
    $special = "@#$%&*!?";

    $all = $uppercase . $lowercase . $digits . $special;

    $password = "";

    // Ensure at least one character from each category
    $password .= $uppercase[rand(0, strlen($uppercase)-1)];
    $password .= $lowercase[rand(0, strlen($lowercase)-1)];
    $password .= $digits[rand(0, strlen($digits)-1)];
    $password .= $special[rand(0, strlen($special)-1)];

    // Fill the remaining length
    for($i = 4; $i < $length; $i++)
    {
        $password .= $all[rand(0, strlen($all)-1)];
    }

    return str_shuffle($password);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $length = $_POST['length'];

    if(empty($length))
    {
        echo "<h2 class='error'>Please enter password length.</h2>";
    }
    elseif($length < 8 || $length > 20)
    {
        echo "<h2 class='error'>Password length must be between 8 and 20.</h2>";
    }
    else
    {
        $password = generatePassword($length);

        echo "<script>alert('Password Generated Successfully');</script>";

        echo "<h2 class='success'>Generated Password</h2>";

        echo "<table>";

        echo "<tr><th>Description</th><th>Value</th></tr>";
        echo "<tr><td>Password Length</td><td>$length</td></tr>";
        echo "<tr><td>Generated Password</td><td><b>$password</b></td></tr>";

        echo "</table>";
    }
}

?>

<br><br>

<a href="index.php">
<input type="button" value="Generate Another Password">
</a>

</div>

</body>
</html>