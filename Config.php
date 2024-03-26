<?php
        $con = mysqli_connect("localhost","root","","student_class");
        if($con){
            echo"";
        }else{
            die("Cannot connect to database".mysqli_connect_errno());
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1 database </title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    
</body>
</html>