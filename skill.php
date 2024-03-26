<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill</title>
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
                        <h4 class="bg-primary p-1 rounded text-white text-center">Insert Faculty</h4>
                        <label for="email" class="form-label">មហាវិទ្យាល័យ:</label>
                        <input type="text" class="form-control" placeholder="Enter input skill" name="skill" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Status:</label>
                        <input type="number" class="form-control" placeholder="Enter input status" name="status" required>
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
        $skill = $_POST["skill"];
        $status = $_POST["status"];
        // echo $skill,$status;
         $sql = "insert into skill(sk_name,sk_status) values('$skill','$status')";
         $query =mysqli_query($con,$sql);
         if($query){
             echo"<script>alert('insert data success!!');<script>";
         }else{
             echo $sql;
         }
    }
?>