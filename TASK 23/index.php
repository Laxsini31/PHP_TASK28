<!DOCTYPE html>
<html>
<head>
    <title>Insurance Premium Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>🛡️ Insurance Premium Calculator</h2>

<form action="process.php" method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Age</label>
<input type="number" name="age" min="18" max="100" required>

<label>Policy Term (Years)</label>
<select name="term" required>
<option value="">--Select--</option>
<option value="10">10 Years</option>
<option value="20">20 Years</option>
<option value="30">30 Years</option>
</select>

<label>Coverage Amount (₹)</label>
<input type="number" name="coverage" min="100000" required>

<input type="submit" value="Calculate Premium">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>