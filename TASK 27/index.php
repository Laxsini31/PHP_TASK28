<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>🧾 Customer Registration System</h2>

<form action="process.php" method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Customer ID</label>
<input type="text" name="customerid" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<label>City</label>
<input type="text" name="city" required>

<input type="submit" value="Register">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>