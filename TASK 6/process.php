<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $department = trim($_POST['department']);

    if(empty($name) || empty($department))
    {
        echo "<h2 class='error'>All fields are required.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$name))
    {
        echo "<h2 class='error'>Invalid Employee Name.</h2>";
    }

    elseif(!preg_match("/^[A-Za-z ]+$/",$department))
    {
        echo "<h2 class='error'>Invalid Department Name.</h2>";
    }

    else
    {
        // String Manipulation Functions

        $name = strtolower($name);          // Convert to lowercase
        $name = trim($name);                // Remove spaces at beginning/end
        $emailName = str_replace(" ",".",$name); // Replace spaces with dots

        $department = strtolower($department);

        // Generate Email ID
        $email = $emailName."@".$department.".com";

        echo "<script>alert('Employee Email ID Generated Successfully');</script>";

        echo "<h2 class='success'>Employee Details</h2>";

        echo "<table>";

        echo "<tr>
                <th>Field</th>
                <th>Information</th>
              </tr>";

        echo "<tr>
                <td>Employee Name</td>
                <td>".ucwords($name)."</td>
              </tr>";

        echo "<tr>
                <td>Department</td>
                <td>".ucwords($department)."</td>
              </tr>";

        echo "<tr>
                <td>Generated Email ID</td>
                <td><b>$email</b></td>
              </tr>";

        echo "</table>";

        echo "<br>";
        echo "<p class='success'>Email ID Generated Successfully.</p>";
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