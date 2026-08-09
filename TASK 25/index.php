<!DOCTYPE html>
<html>
<head>
    <title>Employee Performance Evaluation System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>🏆 Employee Performance Evaluation System</h2>

<form action="process.php" method="post">

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Employee ID</label>
<input type="text" name="empid" required>

<label>Department</label>
<input type="text" name="department" required>

<label>Performance Score (0 - 100)</label>
<input type="number" name="score" min="0" max="100" required>

<input type="submit" value="Evaluate Performance">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>