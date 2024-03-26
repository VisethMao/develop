<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
    <?php include "boostrap.php"; ?>
    <style>
    form{
      max-width: 80%;
      margin-left: 10%;
      padding: 20px;
      background-color: #e6ffe6;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    input{
        margin-left: 10px;
    }
    table{
        margin-left: 50px;
    }
    .tb{
        text-align: center;
        color: blue;
    }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">

        <?php include "func1.php"; ?>

        </form>
    </div>
    <?php
    function area($number1 , $number2){
        $area = $number1 * $number2;
        return $area;
    }
    if (isset($_POST['btnsave'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if(empty($num1) && empty($num2)){
            
        }else{
            $sum = area($num1,$num2);
            echo "<div class='text-primary m-2'>";
            echo "<p class='text-center'>The area of rectangle with length $num1 and width $num2 have area of : $sum m<sup>2</sup></p>";
            echo "</div>";
        }
    }
    ?>
</html>
</body>