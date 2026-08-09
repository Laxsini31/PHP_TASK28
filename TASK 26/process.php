<!DOCTYPE html>
<html>
<head>
<title>Result Analysis</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

function calculatePercentage($total)
{
    return ($total/500)*100;
}

function getClass($percentage)
{
    if($percentage>=75)
        return "Distinction";
    elseif($percentage>=60)
        return "First Class";
    elseif($percentage>=50)
        return "Second Class";
    elseif($percentage>=40)
        return "Pass";
    else
        return "Fail";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$regno=trim($_POST['regno']);

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];

if(empty($name)||empty($regno)||$m1==""||$m2==""||$m3==""||$m4==""||$m5=="")
{
    echo "<h2 class='error'>All fields are required.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
    echo "<h2 class='error'>Invalid Student Name.</h2>";
}
elseif($m1>100||$m2>100||$m3>100||$m4>100||$m5>100)
{
    echo "<h2 class='error'>Marks cannot exceed 100.</h2>";
}
else
{

$total=$m1+$m2+$m3+$m4+$m5;

$percentage=calculatePercentage($total);

$class=getClass($percentage);

echo "<script>alert('Result Generated Successfully');</script>";

echo "<h2 class='success'>Examination Result</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Student Name</td><td>$name</td></tr>";
echo "<tr><td>Register Number</td><td>$regno</td></tr>";
echo "<tr><td>Total Marks</td><td>$total / 500</td></tr>";
echo "<tr><td>Percentage</td><td>".number_format($percentage,2)." %</td></tr>";
echo "<tr><td>Class Obtained</td><td><b>$class</b></td></tr>";

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