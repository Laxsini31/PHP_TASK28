<html>
<head>
    <title>Applicant Validation System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2 id="title">Applicant Validation System</h2>

<form action="process.php" method="post">

<label>Applicant Name</label>
<input type="text" name="name" required>

<label>Email ID</label>
<input type="email" name="email" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" value="Validate">

<input type="reset" value="Clear">

</form>
</div>
</body>
</html>