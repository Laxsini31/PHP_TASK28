<html>
<head>
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name = trim($_POST['name']);
$height = $_POST['height'];
$weight = $_POST['weight'];
if(empty($name) || empty($height) || empty($weight)){
    echo "<h2 class='error'>All fields are required.</h2>";
}elseif(!preg_match("/^[A-Za-z ]+$/",$name)){
    echo "<h2 class='error'>Name should contain only alphabets.</h2>";
}elseif($height<=0){
    echo "<h2 class='error'>Enter a valid height.</h2>";
}elseif($weight<=0){
    echo "<h2 class='error'>Enter a valid weight.</h2>";
}else{
    $heightInMeter = $height / 100;
    $bmi = $weight / ($heightInMeter * $heightInMeter);
    if($bmi < 18.5){
        $status = "Underweight";
        $recommendation = "Increase healthy food intake and consult a nutritionist.";
    }elseif($bmi >= 18.5 && $bmi < 25){
        $status = "Normal Weight";
        $recommendation = "Maintain a balanced diet and exercise regularly.";
    }elseif($bmi >=25 && $bmi <30){
        $status = "Overweight";
        $recommendation = "Exercise regularly, avoid junk food and follow a healthy diet.";
    }else{
        $status = "Obese";
        $recommendation = "Consult a doctor and start a weight management plan.";
    }
    echo "<script>alert('BMI Calculated Successfully');</script>";
    echo "<h2 class='success'>BMI Report</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Details</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Height</td><td>$height cm</td></tr>";
    echo "<tr><td>Weight</td><td>$weight kg</td></tr>";
    echo "<tr><td><b>BMI</b></td><td><b>".number_format($bmi,2)."</b></td></tr>";
    echo "<tr><td>Health Status</td><td>$status</td></tr>";
    echo "<tr><td>Recommendation</td><td>$recommendation</td></tr>";
    echo "</table>";
    echo "<br>";
    echo "<a href='index.php'><input type='button' value='Calculate Again'></a>";
}
}
?>
</div>
</body>
</html>