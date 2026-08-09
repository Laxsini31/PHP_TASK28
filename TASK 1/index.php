<!DOCTYPE html>
<html>
<head>
    <title>Student Details Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2 id="title">Student Details Form</h2>

    <form action="process.php" method="post">

        <label>Student Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter 10-digit phone number" required>

        <label>Age</label>
        <input type="number" name="age" min="18" max="60" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Create a password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm password" required>

        <input type="submit" value="Submit">

        <input type="reset" value="Clear">

    </form>

</div>

</body>
</html>