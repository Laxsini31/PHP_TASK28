<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 id="title">🔐 Secure Password Generator</h2>

<form action="process.php" method="post">

<label>Password Length</label>
<input type="number" name="length" min="8" max="20" required>

<input type="submit" value="Generate Password">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>