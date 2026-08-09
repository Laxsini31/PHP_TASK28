<!DOCTYPE html>
<html>
<head>
    <title>Examination Result Analysis System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>🌸 Examination Result Analysis System</h2>

<form action="process.php" method="post">

<label>Student Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Marks in Subject 1</label>
<input type="number" name="m1" min="0" max="100" required>

<label>Marks in Subject 2</label>
<input type="number" name="m2" min="0" max="100" required>

<label>Marks in Subject 3</label>
<input type="number" name="m3" min="0" max="100" required>

<label>Marks in Subject 4</label>
<input type="number" name="m4" min="0" max="100" required>

<label>Marks in Subject 5</label>
<input type="number" name="m5" min="0" max="100" required>

<input type="submit" value="Analyze Result">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>