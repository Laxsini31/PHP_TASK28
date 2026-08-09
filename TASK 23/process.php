<!DOCTYPE html>
<html>
<head>
<title>Policy Summary</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=trim($_POST['name']);
$age=$_POST['age'];
$term=$_POST['term'];
$coverage=$_POST['coverage'];

if(empty($name)||empty($age)||empty($term)||empty($coverage))
{
echo "<h2 class='error'>All fields are required.</h2>";
}
elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
echo "<h2 class='error'>Invalid Customer Name.</h2>";
}
elseif($age<18)
{
echo "<h2 class='error'>Minimum age should be 18 years.</h2>";
}
else
{

if($age<=30)
$rate=0.02;
elseif($age<=50)
$rate=0.03;
else
$rate=0.05;

$premium=($coverage*$rate)+($term*100);

echo "<script>alert('Premium Calculated Successfully');</script>";

echo "<h2 class='success'>Policy Summary</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Customer Name</td><td>$name</td></tr>";
echo "<tr><td>Age</td><td>$age Years</td></tr>";
echo "<tr><td>Policy Term</td><td>$term Years</td></tr>";
echo "<tr><td>Coverage Amount</td><td>₹ ".number_format($coverage,2)."</td></tr>";
echo "<tr><td>Premium Amount</td><td><b>₹ ".number_format($premium,2)."</b></td></tr>";

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