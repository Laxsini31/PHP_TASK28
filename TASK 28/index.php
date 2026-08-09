<!DOCTYPE html>
<html>
<head>
    <title>Parent–Teacher Meeting Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>👨‍👩‍👧 Parent–Teacher Meeting Registration</h2>

<form action="process.php" method="post">

<label>Parent Name</label>
<input type="text" name="parentname" required>

<label>Student Name</label>
<input type="text" name="studentname" required>

<label>Class</label>
<input type="text" name="class" required>

<label>Teacher</label>
<select name="teacher" required>
    <option value="">--Select Teacher--</option>
    <option>Mr. Kumar</option>
    <option>Mrs. Priya</option>
    <option>Ms. Divya</option>
    <option>Mr. Arun</option>
</select>

<label>Meeting Slot</label>
<select name="slot" required>
    <option value="">--Select Slot--</option>
    <option>10:00 AM - 10:30 AM</option>
    <option>10:30 AM - 11:00 AM</option>
    <option>11:00 AM - 11:30 AM</option>
    <option>11:30 AM - 12:00 PM</option>
</select>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<input type="submit" value="Book Appointment">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>