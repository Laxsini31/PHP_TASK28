<html>
<head>
    <title>Admission Acknowledgement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $address=trim($_POST['address']);
    if(empty($name) || empty($email) || empty($phone) || empty($dob) || empty($gender) || empty($course) || empty($address)){
        echo "<h2 class='error'>All fields are mandatory.</h2>";
    } elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
        echo "<h2 class='error'>Invalid Applicant Name.</h2>";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<h2 class='error'>Invalid Email Address.</h2>";
    }elseif(!preg_match("/^[0-9]{10}$/",$phone)){
        echo "<h2 class='error'>Phone Number must contain exactly 10 digits.</h2>";
    }else{
        echo "<script>alert('Admission Application Submitted Successfully');</script>";
        echo "<h2 class='success'>Admission Application Submitted Successfully</h2>";
        echo "<div class='acknowledgement'>";
        echo "<h3>Admission Acknowledgement</h3>";
        echo "<table>";
        echo "<tr><th>Field</th><th>Details</th></tr>";
        echo "<tr>";
        echo "<td>Applicant Name</td>";
        echo "<td>$name</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email</td>";
        echo "<td>$email</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Phone Number</td>";
        echo "<td>$phone</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Date of Birth</td>";
        echo "<td>$dob</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Gender</td>";
        echo "<td>$gender</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Course Applied</td>";
        echo "<td>$course</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Address</td>";
        echo "<td>$address</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
        echo "<p><b>Your admission application has been received successfully.</b></p>";
        echo "<p>Our admission office will contact you shortly.</p>";
        echo "</div>";
    }
}
?>
<br>
<a href="index.php">
    <input type="button" value="Back to Application Form"></a>
</div>
</body>
</html>