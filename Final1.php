<?php 
     //Create connection
     $host = "localhost";
     $username = "root";
     $Password = "";
     $db = "Staff";
     //Create Condition database
     $connect = mysqli_connect($host,$username,$Password,$db);
     //checking connection
    if($connect->connect_error){
        echo("connect error".mysqli_connect_error());
     }
                    echo"<table class='table table-striped'>";
                    echo"<div><h3 class='text-center mt-2 p-2 bg-primary rounded'>Config Database</h3></div>";
                    echo"<tr>";
                        echo"<th>Host</th>";
                        echo"<th>:</th>";
                        echo"<th>$host</th>";
                    echo"</tr>";
                    echo"<tr>";
                        echo"<th>User Name</th>";
                        echo"<th>:</th>";
                        echo"<th>$username</th>";
                    echo"</tr>";
                    echo"<tr>";
                        echo"<th>Password</th>";
                        echo"<th>:</th>";
                        echo"<th></th>";
                    echo"</tr>";
                    echo"<tr>";
                        echo"<th>Database Name</th>";
                        echo"<th>:</th>";
                        echo"<th>$db</th>";
                    echo"</tr>";
                echo"</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <?php include "boostrap.php"; ?>
    <style>
    .table{
        width: 30rem;
        margin-top: 2%;
        margin-left: 29%;
    } 
    h3{
        color: white;
        font-family: sans-serif;
        font-size: 25px;
    }
    .body{
        background-image: linear-gradient(to top, #0250c5 0%, #d43f8d 100%);
    }
    </style>
</head>
<body class="body">
    
</body>
</html>