<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $number = trim($_POST['number']);
    $units = $_POST['units'];

    if(empty($name) || empty($number) || empty($units))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Consumer Name.</h2>";
    }

    elseif($units <= 0)
    {
        echo "<h2 class='error'>Units must be greater than zero.</h2>";
    }

    else
    {
        // Slab Calculation

        if($units <= 100)
        {
            $bill = $units * 2;
        }
        elseif($units <= 200)
        {
            $bill = (100 * 2) + (($units - 100) * 3);
        }
        elseif($units <= 300)
        {
            $bill = (100 * 2) + (100 * 3) + (($units - 200) * 5);
        }
        else
        {
            $bill = (100 * 2) + (100 * 3) + (100 * 5) + (($units - 300) * 7);
        }

        echo "<script>alert('Electricity Bill Generated Successfully');</script>";

        echo "<h2 class='success'>Electricity Bill</h2>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Consumer Name</td><td>$name</td></tr>";

        echo "<tr><td>Consumer Number</td><td>$number</td></tr>";

        echo "<tr><td>Units Consumed</td><td>$units Units</td></tr>";

        echo "<tr><td>Total Bill</td><td><b>₹ ".number_format($bill,2)."</b></td></tr>";

        echo "</table>";

        echo "<br>";

        echo "<p class='success'>Bill calculated successfully.</p>";
    }
}

?>

<br>

<a href="index.php">
<input type="button" value="Calculate Another Bill">
</a>

</div>

</body>
</html>