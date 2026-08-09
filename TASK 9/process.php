<!DOCTYPE html>
<html>
<head>
    <title>String Analysis Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $title = trim($_POST['title']);

    if(empty($title))
    {
        echo "<h2 class='error'>Please enter a title.</h2>";
    }
    else
    {
        $vowels = 0;
        $consonants = 0;
        $digits = 0;
        $special = 0;

        $length = strlen($title);

        for($i=0; $i<$length; $i++)
        {
            $ch = $title[$i];

            if(ctype_alpha($ch))
            {
                if(stripos("AEIOU", $ch) !== false)
                {
                    $vowels++;
                }
                else
                {
                    $consonants++;
                }
            }
            elseif(ctype_digit($ch))
            {
                $digits++;
            }
            elseif($ch != " ")
            {
                $special++;
            }
        }

        echo "<script>alert('String Analysis Completed Successfully');</script>";

        echo "<h2 class='success'>String Analysis Report</h2>";

        echo "<table>";

        echo "<tr>
                <th>Analysis</th>
                <th>Result</th>
              </tr>";

        echo "<tr><td>Entered Title</td><td>$title</td></tr>";
        echo "<tr><td>Total Characters</td><td>$length</td></tr>";
        echo "<tr><td>Number of Vowels</td><td>$vowels</td></tr>";
        echo "<tr><td>Number of Consonants</td><td>$consonants</td></tr>";
        echo "<tr><td>Number of Digits</td><td>$digits</td></tr>";
        echo "<tr><td>Number of Special Characters</td><td>$special</td></tr>";

        echo "</table>";

        echo "<br>";

        echo "<p class='success'><b>String analysis completed successfully.</b></p>";
    }
}

?>

<br>

<a href="index.php">
    <input type="button" value="Analyze Another String">
</a>

</div>

</body>
</html>