<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design form</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="bg-primary mt-2 rounded text-center text-white p-2">PHP if Statement</h3>
                <form action="" method="POST">
                    <label for="email" class="form-label">Enter Age :</label>
                    <input type="number" class="form-control mb-2" placeholder="Enter age" name="age" required>
                    <button type="Submit" name="btnsave" class="btn btn-success">Save</button>
                    <button type="reset" name="btnclear" class="btn btn-danger">Clear</button>
                </form>
                <?php
                if(isset($_POST['btnsave'])){
                    $age = $_POST['age'];
                    echo"<table class='table'>";
                    if($age >= 60){
                        echo"
                        <tr>
                        <td>Age :</td> <td>Very old</td>
                        </tr>
                        ";
                    }elseif($age >= 50){
                        echo"
                        <tr>
                        <td>Age :</td> <td>old</td>
                        </tr>
                        ";
                    }elseif($age >= 30){
                        echo"
                        <tr>
                        <td>Age :</td> <td>Middle old</td>
                        </tr>
                        ";
                    }elseif($age >= 18){
                        echo"
                        <tr>
                        <td>Age :</td> <td>Adult</td>
                        </tr>
                        ";
                    }else{
                        echo"
                        <tr>
                        <td>Age :</td> <td>Childhood</td>
                        </tr>
                        ";
                    }
                    echo"</table>";
                }
                ?>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>