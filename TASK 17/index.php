<!DOCTYPE html>
<html>
<head>
    <title>Mobile Bill Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2 id="title">📱 Mobile Bill Generator</h2>

<form action="process.php" method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<label>Tariff Plan</label>
<select name="plan" required>
    <option value="">--Select Plan--</option>
    <option value="Basic">Basic (₹199)</option>
    <option value="Standard">Standard (₹399)</option>
    <option value="Premium">Premium (₹599)</option>
</select>

<label>Extra Data Used (GB)</label>
<input type="number" name="data" min="0" required>

<input type="submit" value="Generate Bill">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>