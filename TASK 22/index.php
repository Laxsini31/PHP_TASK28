<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Processing System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>💼 Employee Salary Processing System</h2>

<form action="process.php" method="post">

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Employee ID</label>
<input type="text" name="empid" required>

<label>Basic Salary (₹)</label>
<input type="number" name="basic" min="1" required>

<input type="submit" value="Calculate Salary">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>