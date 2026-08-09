<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $age = trim($_POST['age']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    if(empty($name) || empty($email) || empty($phone) || empty($age) || empty($password) || empty($confirm)){
        echo "<h3 class='error'>All fields are required.</h3>";
    } elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
        echo "<h3 class='error'>Invalid Name. Only alphabets and spaces are allowed.</h3>";
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<h3 class='error'>Invalid Email Address.</h3>";
    } elseif(!preg_match("/^[0-9]{10}$/",$phone)){
        echo "<h3 class='error'>Phone Number must contain exactly 10 digits.</h3>";
    } elseif($age < 18 || $age > 60){
        echo "<h3 class='error'>Age must be between 18 and 60.</h3>";
    } elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/",$password)){
        echo "<h3 class='error'>Password must contain at least 8 characters, one uppercase letter, one lowercase letter and one number.</h3>";
    } elseif($password != $confirm){
        echo "<h3 class='error'>Passwords do not match.</h3>";
    } else{
        echo "<script>alert('Student Details Submitted Successfully');</script>";
        echo "<h2 class='success'>Registration Successful!</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Field</th>";
        echo "<th>Student Details</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Student Name</td>";
        echo "<td>$name</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email Address</td>";
        echo "<td>$email</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Phone Number</td>";
        echo "<td>$phone</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Age</td>";
        echo "<td>$age</td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>
<br>
<a href="index.php">
    <input type="button" value="Back to Form">
</a>
</div>
</body>
</html>