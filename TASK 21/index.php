<!DOCTYPE html>
<html>
<head>
    <title>Attendance Processing System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>📘 Attendance Processing System</h2>

<form action="process.php" method="post">

<label>Student Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Total Working Days</label>
<input type="number" name="working" min="1" required>

<label>Days Present</label>
<input type="number" name="present" min="0" required>

<input type="submit" value="Calculate Attendance">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>