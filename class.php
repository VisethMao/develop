<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <?php
    $num1 = 19;
    $num2 = 30;
    $add  = $num1 + $num2;
    $sub  = $num1 - $num2;
    $mul  = $num1 * $num2;
    $div  = $num1 / $num2;
    $mol  = $num1 % $num2;
    echo "<h3 class='text-center mt-3 text-primary bg-info rounded m-2 p-1' style='font-family:AKbalthom Kbach'> Arithmatic គណិតវិទ្យា </h3>";
    echo "<div>";
        echo "<table class='table' style='font-family:AKbalthom Kbach'>";
            echo "<tr>";
                echo "<td class='text-danger'>Addition</td><td> 19 + 30 = $add</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td class='text-primary'>Substraction</td><td> 19 - 30 = $sub</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td class='text-success'>multiplication</td><td> 19 * 30 = $mul</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td class='text-info'>Division</td><td> 19 / 30 = $div</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td class='text-warning'>Modulus</td><td> 19 % 30 = $mul</td>";
            echo "</tr>";
        echo "</table>";
    echo "</div>";
    ?>
</body>
</html>