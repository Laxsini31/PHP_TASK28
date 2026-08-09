<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Electricity Bill Calculator</h2>

<form action="process.php" method="post">

<label>Consumer Name</label>
<input type="text" name="name" required>

<label>Consumer Number</label>
<input type="text" name="number" required>

<label>Units Consumed</label>
<input type="number" name="units" min="1" required>

<input type="submit" value="Calculate Bill">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>