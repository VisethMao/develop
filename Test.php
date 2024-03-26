<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <?php 
        $a = 8;
        $b = 2;
        $c = 4;
        $d = 5;
        $e = 3;
        echo "<div class='mt-2 p-2 m-5 text-center text-primary bg-light rounded'>";
        echo "Value is now $a"."<br>";
        $a += $b;
        echo "Add $b. Value is now $a"."<br>";
        $a -= $c;
        echo "Subtract $c. Value is now $a"."<br>";
        $a *= $d;
        echo "Multiply by $d. Value is now $a"."<br>";
        $a /= $e;
        echo "Divide by $e. Value is now $a"."<br>";
        ++$a;
        echo "Increment value by one. Value is now $a"."<br>";
        --$a;
        echo "Decrement value by one. Value is now $a";
        echo "</div>";
    ?>
</body>
</html>