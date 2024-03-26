<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <?php include "boostrap.php"; ?>
    <style>
    form{
      max-width: 50%;
      margin-left: 25%;
      padding: 20px;
      background-image: linear-gradient(to top, #0250c5 0%, #d43f8d 100%);
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid mt-1 container">
        <div class="row">
            <div class="col">
                <form action="Final.php" method="POST">
                <?php include "Fin.php"; ?>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['btnsave'])) {
        $oldp = $_POST['oldp'];
        $newp = $_POST['newp'];
        $comfp = $_POST['comfp'];

        if($oldp !=='admin123'){
            echo"<script>alert('Wrong old password!!');</script>";
        }
        else if($newp !==  $comfp ){
            echo"<script>alert('Password not matched!!');</script>";
        }
        else if($oldp ==='admin123' && $newp  ==  $comfp ){
        echo"<script>alert('Update successfully!!');</script>";
       }
    }
    ?>
</body>
</html>