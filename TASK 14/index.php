<!DOCTYPE html>
<html>
<head>
    <title>Sales Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Sales Calculator</h2>

<form action="process.php" method="post">

<label>Product Name</label>
<input type="text" name="product" required>

<label>Product Quantity</label>
<input type="number" name="quantity" min="1" required>

<label>Price per Product (₹)</label>
<input type="number" name="price" min="1" required>

<input type="submit" value="Calculate Sales">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>