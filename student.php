<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery3.6.js"></script>
</head>
<body>
<div class="container-fluid mt-2">
    <!---Start Header---> 
        <?php include "header.php";?>
    <!---End Header--->
        <div class="row mt-2">
                <div class="col-sm-3">
    <!---Start menu--->
        <?php include "menu.php";?>
    <!---End menu--->
                </div>
    <!---Start content--->
                <div class="col-sm-9">
        <?php include "scontent.php";?>
                </div>
    <!---End content--->
            </div>
            <div class="row mt-2">
        <?php include "footer.php";  ?>
            </div>
    </div>
</body>
</html>