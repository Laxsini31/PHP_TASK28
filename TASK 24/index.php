<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>👔 Employee Information Portal</h2>

<form action="process.php" method="post">

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Employee ID</label>
<input type="text" name="empid" required>

<label>Department</label>
<select name="department" required>
<option value="">--Select Department--</option>
<option>Human Resources</option>
<option>Finance</option>
<option>Information Technology</option>
<option>Marketing</option>
<option>Sales</option>
</select>

<label>Designation</label>
<input type="text" name="designation" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<input type="submit" value="View Profile">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>