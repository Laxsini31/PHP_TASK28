<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

// Function to calculate Total
function calculateTotal($html,$css,$php,$js,$mysql)
{
    return $html + $css + $php + $js + $mysql;
}

// Function to calculate Average
function calculateAverage($total)
{
    return $total / 5;
}

// Function to determine Grade
function calculateGrade($average)
{
    if($average >= 90)
        return "A+";

    elseif($average >= 80)
        return "A";

    elseif($average >= 70)
        return "B";

    elseif($average >= 60)
        return "C";

    elseif($average >= 50)
        return "D";

    else
        return "F";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $regno = trim($_POST['regno']);
    $html = $_POST['html'];
    $css = $_POST['css'];
    $php = $_POST['php'];
    $js = $_POST['js'];
    $mysql = $_POST['mysql'];

    if(empty($name) || empty($regno))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Student Name.</h2>";
    }

    else
    {
        $total = calculateTotal($html,$css,$php,$js,$mysql);
        $average = calculateAverage($total);
        $grade = calculateGrade($average);

        // Decision Making Statement
        if($html>=35 && $css>=35 && $php>=35 && $js>=35 && $mysql>=35)
        {
            $result="PASS";
        }
        else
        {
            $result="FAIL";
        }

        echo "<script>alert('Result Processed Successfully');</script>";

        echo "<h2 class='success'>Student Result</h2>";

        echo "<table>";

        echo "<tr>
                <th>Particular</th>
                <th>Details</th>
              </tr>";

        echo "<tr><td>Student Name</td><td>$name</td></tr>";
        echo "<tr><td>Register Number</td><td>$regno</td></tr>";
        echo "<tr><td>HTML Marks</td><td>$html</td></tr>";
        echo "<tr><td>CSS Marks</td><td>$css</td></tr>";
        echo "<tr><td>PHP Marks</td><td>$php</td></tr>";
        echo "<tr><td>JavaScript Marks</td><td>$js</td></tr>";
        echo "<tr><td>MySQL Marks</td><td>$mysql</td></tr>";

        echo "<tr><th>Total Marks</th><th>$total / 500</th></tr>";
        echo "<tr><th>Average</th><th>".number_format($average,2)."</th></tr>";
        echo "<tr><th>Grade</th><th>$grade</th></tr>";
        echo "<tr><th>Result</th><th>$result</th></tr>";

        echo "</table>";

        echo "<br>";

        if($result=="PASS")
        {
            echo "<h3 class='success'>Congratulations! You Passed.</h3>";
        }
        else
        {
            echo "<h3 class='error'>Sorry! You Failed.</h3>";
        }
    }
}

?>

<br>

<a href="index.php">
    <input type="button" value="Back">
</a>

</div>

</body>
</html>