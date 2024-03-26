<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <?php include "boostrap.php"; ?>
    <style>
        .form-control{
            width: 19rem;
            border: 2px solid blue;
        }
    </style>
</head>
<body>
    <center>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col">
                <h4 style="font-family: Kh Writhand; font-size: 35px;" class="bg-primary text-white p-3 rounded">លេខតាមលំដាប់</h4>
            </div>
        </div>
    <?php
    $row = 1;
    $num = 1;
    echo"<table class='form-control btn-light tb' style='width: 320px; text-align: center;'>";
    while($row <=5){
        echo"<tr>";
        $col = 1;
        while($col <= 5){
            echo"<td  class='p-2'><button style='border: 2px solid red' class='rounded'>$num</button></td>";
            $col++;
            $num++;
        }
        echo"</tr>";
        $row++;
    }
    echo"</table>";
    ?>
    </div>
    </center>
</body>
</html>