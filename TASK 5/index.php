<!DOCTYPE html>
<html>
<head>
    <title>Student Result Processing System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Student Result Processing System</h2>

<form action="process.php" method="post">

<label>Student Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>HTML Marks</label>
<input type="number" name="html" min="0" max="100" required>

<label>CSS Marks</label>
<input type="number" name="css" min="0" max="100" required>

<label>PHP Marks</label>
<input type="number" name="php" min="0" max="100" required>

<label>JavaScript Marks</label>
<input type="number" name="js" min="0" max="100" required>

<label>MySQL Marks</label>
<input type="number" name="mysql" min="0" max="100" required>

<input type="submit" value="Process Result">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>