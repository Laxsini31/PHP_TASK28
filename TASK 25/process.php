<!DOCTYPE html>
<html>
<head>
<title>Performance Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$empid=trim($_POST['empid']);
$department=trim($_POST['department']);
$score=$_POST['score'];

if(empty($name)||empty($empid)||empty($department)||$score=="")
{
echo "<h2 class='error'>All fields are required.</h2>";
}

elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
echo "<h2 class='error'>Invalid Employee Name.</h2>";
}

elseif($score<0 || $score>100)
{
echo "<h2 class='error'>Performance Score must be between 0 and 100.</h2>";
}

else
{

if($score>=90)
$rating="⭐⭐⭐⭐⭐ Outstanding";

elseif($score>=75)
$rating="⭐⭐⭐⭐ Excellent";

elseif($score>=60)
$rating="⭐⭐⭐ Good";

elseif($score>=40)
$rating="⭐⭐ Average";

else
$rating="⭐ Needs Improvement";

echo "<script>alert('Evaluation Completed Successfully');</script>";

echo "<h2 class='success'>Employee Performance Report</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Employee Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$empid</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Performance Score</td><td>$score / 100</td></tr>";
echo "<tr><td>Performance Rating</td><td><b>$rating</b></td></tr>";

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