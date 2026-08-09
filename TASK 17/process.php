<!DOCTYPE html>
<html>
<head>
    <title>Mobile Bill Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

function calculateBill($plan, $data)
{
    switch($plan)
    {
        case "Basic":
            $amount = 199;
            break;

        case "Standard":
            $amount = 399;
            break;

        case "Premium":
            $amount = 599;
            break;

        default:
            $amount = 0;
    }

    // Extra data charge
    $extraCharge = $data * 20;

    return $amount + $extraCharge;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $mobile = trim($_POST['mobile']);
    $plan = $_POST['plan'];
    $data = $_POST['data'];

    if(empty($name) || empty($mobile) || empty($plan))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }
    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Customer Name.</h2>";
        echo "<br><br>";
        echo "<a href='index.php'><input type='button' value='Back'></a>";
    }
    elseif(!preg_match("/^[0-9]{10}$/",$mobile))
    {
        echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
    }
    else
    {
        $total = calculateBill($plan, $data);

        echo "<script>alert('Bill Generated Successfully');</script>";

        echo "<h2 class='success'>Mobile Bill Summary</h2>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Customer Name</td><td>$name</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Tariff Plan</td><td>$plan</td></tr>";
        echo "<tr><td>Extra Data Used</td><td>$data GB</td></tr>";
        echo "<tr><td><b>Total Bill</b></td><td><b>₹ ".number_format($total,2)."</b></td></tr>";

        echo "</table>";

        echo "<br>";

        echo "<a href='index.php'><input type='button' value='Generate Another Bill'></a>";
        
    }
}

?>

</div>

</body>
</html>