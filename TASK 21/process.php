<html>
<head>
<title>Attendance Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
function attendancePercentage($working,$present)
{
    return ($present/$working)*100;
}
function eligibility($percentage)
{
    if($percentage>=75)
        return "Eligible for Examination";
    else
        return "Not Eligible for Examination";
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=trim($_POST['name']);
$regno=trim($_POST['regno']);
$working=$_POST['working'];
$present=$_POST['present'];
if(empty($name)||empty($regno)||empty($working)||$present==""){
    echo "<h2 class='error'>All fields are required.</h2>";
}elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
    echo "<h2 class='error'>Invalid Student Name.</h2>";
}elseif($working<=0){
    echo "<h2 class='error'>Working days must be greater than zero.</h2>";
}elseif($present>$working){
    echo "<h2 class='error'>Days Present cannot exceed Working Days.</h2>";
}else{
$percentage=attendancePercentage($working,$present);
$status=eligibility($percentage);
echo "<script>alert('Attendance Calculated Successfully');</script>";
echo "<h2 class='success'>Attendance Report</h2>";
echo "<table>";
echo "<tr><th>Field</th><th>Details</th></tr>";
echo "<tr><td>Student Name</td><td>$name</td></tr>";
echo "<tr><td>Register Number</td><td>$regno</td></tr>";
echo "<tr><td>Total Working Days</td><td>$working</td></tr>";
echo "<tr><td>Days Present</td><td>$present</td></tr>";
echo "<tr><td>Attendance Percentage</td><td>".number_format($percentage,2)." %</td></tr>";
echo "<tr><td>Examination Eligibility</td><td><b>$status</b></td></tr>";
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