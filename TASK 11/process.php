<html>
<head>
    <title>Validation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $password = $_POST['password'];

    if(empty($name) || empty($email) || empty($mobile) || empty($password)){
        echo "<h2 class='error'>All fields are required.</h2>";
    }elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
        echo "<h2 class='error'>Invalid Applicant Name.</h2>";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<h2 class='error'>Invalid Email ID.</h2>";
    }elseif(!preg_match("/^[0-9]{10}$/",$mobile)){
        echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
    }elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/",$password)){
        echo "<h2 class='error'>Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one number.</h2>";
    }else{
        echo "<script>alert('Applicant Validation Successful');</script>";
        echo "<h2 class='success'>Validation Successful</h2>";
        echo "<table>";
        echo "<tr><th>Field</th><th>Details</th></tr>";
        echo "<tr><td>Applicant Name</td><td>$name</td></tr>";
        echo "<tr><td>Email ID</td><td>$email</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Password Status</td><td>Valid Password</td></tr>";
        echo "</table>";
        echo "<br>";
        echo "<p class='success'>All entered details are valid.</p>";
    }
}
?>
<br>
<a href="index.php">
<input type="button" value="Back"></a>
</div>
</body>
</html>