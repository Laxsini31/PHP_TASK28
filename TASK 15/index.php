<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">BMI Calculator</h2>

<form action="process.php" method="post">

<label>Full Name</label>
<input type="text" name="name" required>

<label>Height (in centimeters)</label>
<input type="number" name="height" step="0.1" placeholder="Example: 163" required>

<label>Weight (in kilograms)</label>
<input type="number" name="weight" step="0.1" placeholder="Example: 68.3" required>

<input type="submit" value="Calculate BMI">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>