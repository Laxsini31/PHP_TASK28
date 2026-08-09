<!DOCTYPE html>
<html>
<head>
<title>Salary Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

function grossSalary($basic)
{
    $hra = $basic * 0.20;
    $da = $basic * 0.10;
    return $basic + $hra + $da;
}

function deductions($gross)
{
    return $gross * 0.08;
}

function netSalary($gross, $deduction)
{
    return $gross - $deduction;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = trim($_POST['name']);
$empid = trim($_POST['empid']);
$basic = $_POST['basic'];

if(empty($name) || empty($empid) || empty($basic))
{
    echo "<h2 class='error'>All fields are required.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
    echo "<h2 class='error'>Invalid Employee Name.</h2>";
}
elseif($basic <= 0)
{
    echo "<h2 class='error'>Basic Salary must be greater than zero.</h2>";
}
else
{

$gross = grossSalary($basic);
$deduction = deductions($gross);
$net = netSalary($gross, $deduction);

echo "<script>alert('Salary Processed Successfully');</script>";

echo "<h2 class='success'>Employee Salary Report</h2>";

echo "<table>";

echo "<tr><th>Description</th><th>Amount</th></tr>";

echo "<tr><td>Employee Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$empid</td></tr>";
echo "<tr><td>Basic Salary</td><td>₹ ".number_format($basic,2)."</td></tr>";
echo "<tr><td>Gross Salary</td><td>₹ ".number_format($gross,2)."</td></tr>";
echo "<tr><td>Deductions (8%)</td><td>₹ ".number_format($deduction,2)."</td></tr>";
echo "<tr><td><b>Net Salary</b></td><td><b>₹ ".number_format($net,2)."</b></td></tr>";

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