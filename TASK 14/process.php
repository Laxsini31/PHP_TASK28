<!DOCTYPE html>
<html>
<head>
    <title>Sales Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

function calculateSales($quantity, $price)
{
    return $quantity * $price;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $product = trim($_POST['product']);
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    if(empty($product) || empty($quantity) || empty($price))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$product))
    {
        echo "<h2 class='error'>Invalid Product Name.</h2>";
    }

    elseif($quantity <= 0)
    {
        echo "<h2 class='error'>Quantity must be greater than zero.</h2>";
    }

    elseif($price <= 0)
    {
        echo "<h2 class='error'>Price must be greater than zero.</h2>";
    }

    else
    {
        $total = calculateSales($quantity, $price);

        echo "<script>alert('Sales Calculated Successfully');</script>";

        echo "<h2 class='success'>Sales Report</h2>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Product Name</td><td>$product</td></tr>";

        echo "<tr><td>Quantity</td><td>$quantity</td></tr>";

        echo "<tr><td>Price per Product</td><td>₹ ".number_format($price,2)."</td></tr>";

        echo "<tr><td>Total Sales Value</td><td><b>₹ ".number_format($total,2)."</b></td></tr>";

        echo "</table>";

        echo "<br>";

        echo "<p class='success'>Sales calculated successfully using a user-defined function.</p>";
    }
}

?>

<br>

<a href="index.php">
<input type="button" value="Calculate Again">
</a>

</div>

</body>
</html>