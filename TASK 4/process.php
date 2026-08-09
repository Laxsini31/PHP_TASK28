<!DOCTYPE html>
<html>
<head>
    <title>Customer Invoice</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $customer = trim($_POST['customer']);
    $product = trim($_POST['product']);
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $gst = $_POST['gst'];

    if(empty($customer) || empty($product) || empty($quantity) || empty($price) || empty($discount) || empty($gst))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$customer))
    {
        echo "<h2 class='error'>Invalid Customer Name.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$product))
    {
        echo "<h2 class='error'>Invalid Product Name.</h2>";
    }

    else
    {
        $total = $quantity * $price;
        $discountAmount = ($total * $discount) / 100;
        $amountAfterDiscount = $total - $discountAmount;
        $gstAmount = ($amountAfterDiscount * $gst) / 100;
        $grandTotal = $amountAfterDiscount + $gstAmount;

        echo "<script>alert('Invoice Generated Successfully');</script>";

        echo "<h2 class='success'>Customer Invoice</h2>";

        echo "<table>";

        echo "<tr>
                <th>Particular</th>
                <th>Details</th>
              </tr>";

        echo "<tr>
                <td>Customer Name</td>
                <td>$customer</td>
              </tr>";

        echo "<tr>
                <td>Product Name</td>
                <td>$product</td>
              </tr>";

        echo "<tr>
                <td>Quantity</td>
                <td>$quantity</td>
              </tr>";

        echo "<tr>
                <td>Price Per Unit</td>
                <td>₹ $price</td>
              </tr>";

        echo "<tr>
                <td>Total Amount</td>
                <td>₹ ".number_format($total,2)."</td>
              </tr>";

        echo "<tr>
                <td>Discount ($discount%)</td>
                <td>₹ ".number_format($discountAmount,2)."</td>
              </tr>";

        echo "<tr>
                <td>Amount After Discount</td>
                <td>₹ ".number_format($amountAfterDiscount,2)."</td>
              </tr>";

        echo "<tr>
                <td>GST ($gst%)</td>
                <td>₹ ".number_format($gstAmount,2)."</td>
              </tr>";

        echo "<tr>
                <th>Grand Total</th>
                <th>₹ ".number_format($grandTotal,2)."</th>
              </tr>";

        echo "</table>";

        echo "<br>";
        echo "<p><b>Thank you for shopping with us!</b></p>";
    }
}

?>

<br>

<a href="index.php">
    <input type="button" value="Back to Billing Form">
</a>

</div>

</body>
</html>