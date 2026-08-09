<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Patient Registration System</h2>

<form action="process.php" method="post">

<label>Patient Name</label>
<input type="text" name="name" required>

<label>Age</label>
<input type="number" name="age" min="1" max="120" required>

<label>Gender</label>
<select name="gender" required>
    <option value="">--Select Gender--</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
</select>

<label>Phone Number</label>
<input type="text" name="phone" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Blood Group</label>
<select name="blood" required>
    <option value="">--Select Blood Group--</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>AB+</option>
    <option>AB-</option>
    <option>O+</option>
    <option>O-</option>
</select>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<input type="submit" value="Register">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>