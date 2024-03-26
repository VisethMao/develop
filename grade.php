<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade</title>
    <?php include "boostrap.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3 mt-3">
                        <h4 class="bg-primary p-1 rounded text-white text-center">Insert Grade</h4>
                        <label for="email" class="form-label">Grade Name:</label>
                        <input type="text" class="form-control" placeholder="grade name" name="Gd_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Grade Status:</label>
                        <input type="number" class="form-control" placeholder="Enter input status" name="Gd_status" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnsave">Save</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>
<?php
    include "Config.php";
    if(isset($_POST["btnsave"])){
        $Gd_name = $_POST["Gd_name"];
        $Gd_status = $_POST["Gd_status"];
        // echo $skill,$status;
         $sql = "insert into grade(Gd_name,Gd_status) values('$Gd_name','$Gd_status')";
         $query =mysqli_query($con,$sql);
         if($query){
             echo"<script>alert('insert data success!!');<script>";
         }else{
             echo $sql;
         }
    }
?>