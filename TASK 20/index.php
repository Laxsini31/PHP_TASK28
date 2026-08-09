<!DOCTYPE html>
<html>
<head>
    <title>Library Membership Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>📚 Library Membership Registration</h2>

<form action="process.php" method="post">

<label>Member Name</label>
<input type="text" name="name" required>

<label>Age</label>
<input type="number" name="age" min="5" required>

<label>Gender</label>
<select name="gender" required>
    <option value="">--Select--</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
</select>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<label>Membership Type</label>
<select name="membership" required>
    <option value="">--Select Membership--</option>
    <option>Student</option>
    <option>Faculty</option>
    <option>Public</option>
</select>

<input type="submit" value="Register">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>