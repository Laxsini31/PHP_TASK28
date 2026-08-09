<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">Employee Email ID Generator</h2>

<form action="process.php" method="post">

<label>Employee Name</label>
<input type="text" name="name" required>

<label>Department</label>
<input type="text" name="department" required>

<input type="submit" value="Generate Email">

<input type="reset" value="Clear">

</form>

</div>

</body>
</html>