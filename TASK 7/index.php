<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Course Registration System</h2>

<form action="process.php" method="post">

<label>Student Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Phone Number</label>
<input type="text" name="phone" required>

<label>Select Course</label>
<select name="course" required>
    <option value="">--Select Course--</option>
    <option>Java Full Stack</option>
    <option>Python Programming</option>
    <option>Web Development</option>
    <option>Data Science</option>
    <option>Artificial Intelligence</option>
</select>

<label>Training Mode</label>

<input type="radio" name="mode" value="Online" required> Online
<input type="radio" name="mode" value="Offline"> Offline

<br><br>

<input type="submit" value="Register">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>