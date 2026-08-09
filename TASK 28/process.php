<!DOCTYPE html>
<html>
<head>
<title>Appointment Confirmation</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$parent=trim($_POST['parentname']);
$student=trim($_POST['studentname']);
$class=trim($_POST['class']);
$teacher=$_POST['teacher'];
$slot=$_POST['slot'];
$mobile=trim($_POST['mobile']);

if(empty($parent)||empty($student)||empty($class)||empty($teacher)||empty($slot)||empty($mobile))
{
echo "<h2 class='error'>All fields are required.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$parent))
{
echo "<h2 class='error'>Invalid Parent Name.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$student))
{
echo "<h2 class='error'>Invalid Student Name.</h2>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
echo "<h2 class='error'>Mobile Number must contain exactly 10 digits.</h2>";
}
else
{

$appointment="PTM".rand(1000,9999);

echo "<script>alert('Appointment Booked Successfully');</script>";

echo "<h2 class='success'>Appointment Confirmation</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Appointment ID</td><td>$appointment</td></tr>";
echo "<tr><td>Parent Name</td><td>$parent</td></tr>";
echo "<tr><td>Student Name</td><td>$student</td></tr>";
echo "<tr><td>Class</td><td>$class</td></tr>";
echo "<tr><td>Teacher</td><td>$teacher</td></tr>";
echo "<tr><td>Meeting Slot</td><td>$slot</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
echo "<tr><td>Meeting Date</td><td>".date("d-m-Y")."</td></tr>";

echo "</table>";

}

}

?>

<br><br>

<a href="index.php">
<input type="button" value="Back">
</a>

</div>

</body>
</html>