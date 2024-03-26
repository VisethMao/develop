<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop</title>
    <?php include "boostrap.php"; ?>
    <style>
           .box1{
            width: 6%;
            height: 35px;
            font-family: 'Times New Roman', Times, serif;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 15px;
            background-color: red;
            color:aliceblue;
           }
    </style>
</head>
<body>
<center>
    <div class="container-fluid">
    <h4 style="font-family: Kh Writhand; font-size: 35px;" class="bg-primary text-white p-2 mt-2 rounded">មេលេខគុណ</h4>
    <form name="form" method="POST" class="mt-2">
        <input class="" type="number" name="n" required>
        <input class="box1" type="submit" name="sub" class="btn btn-danger btn-sm">
    </form><br>
    <?php
    if(isset($_POST['sub'])){
    $n = $_POST['n'];
    $sub = $_POST['sub'];
    if($sub)
     for($i = 1; $i<=10; $i++){ 
        $sum = $n * $i;
        echo "<table class='mt-1 text-white bg-primary' style='border: 1px solid black; width: 320px; text-align: center;'>";
        echo "<tr>";
        echo "<td>$n * $i = $sum<br></td>";
        echo "</tr>";
        echo "</table>";
        }
    }
        ?>
    </div>
</center>
</body>
</html>