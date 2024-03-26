<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "boostrap.php"; ?>
    <?php include "Config.php"; ?>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3 mt-3">
                        <h4 class="bg-success p-2 rounded text-warning text-center">Gender</h4>
                        <label for="" class="form-label">Gender:</label>
                        <input type="text" class="form-control" placeholder="Gender" name="gd_name" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">​Status:</label>
                        <input type="text" class="form-control" placeholder="status" name="gd_status" required>
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
    if(isset($_POST["btnsave"])){
        $gd_name = $_POST["gd_name"];
        $gd_status = $_POST["gd_status"];
        // echo $skill,$status;
         $sql = "insert into gender(gd_name,gd_status) values('$gd_name','$gd_status')";
         $query =mysqli_query($con,$sql);
         if($query){
             echo"<script>alert('insert data success!!');<script>";
         }else{
             echo $sql;
         }
    }
?>