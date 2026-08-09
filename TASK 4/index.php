<!DOCTYPE html>
<html>
<head>
    <title>Supermarket Billing System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Supermarket Billing System</h2>

<form action="process.php" method="post">

<label>Customer Name</label>
<input type="text" name="customer" placeholder="Enter Customer Name" required>

<label>Product Name</label>
<input type="text" name="product" placeholder="Enter Product Name" required>

<label>Quantity</label>
<input type="number" name="quantity" min="1" required>

<label>Price Per Unit (₹)</label>
<input type="number" name="price" min="1" required>

<label>Discount (%)</label>
<input type="number" name="discount" min="0" max="100" required>

<label>GST (%)</label>
<input type="number" name="gst" min="0" max="100" required>

<input type="submit" value="Generate Bill">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>