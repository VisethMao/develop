<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <?php include "boostrap.php"; ?>
    <style>
    form{
      padding: 20px;
      background-image: linear-gradient(to top, #0250c5 0%, #d43f8d 100%);
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      width: 100%;
    }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"> 
                <form action="Final2.php" method="POST">
                    <?php include "Fin1.php"; ?>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <?php
        if (isset($_POST['btnsave'])) {
            $Pass = $_POST['Pass'];
            if($Pass === 'admin123'){
                echo"<script>(window.location.href = 'Final.php');</script>";
            }else if($Pass !== 'admin123'){
                echo"<script>alert('Please input try Again Password!!');</script>";
            }
        }
    ?>
</body>
</html>