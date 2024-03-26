<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mydatabse</title>
    <?php include "boostrap.php"; ?>
    <!-- <?php include "Config.php"; ?> -->
    <style>
        .container{
            border: 2px solid gray;
            padding: 5px 6px 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                <h4 class="bg-warning p-3 rounded text-success text-center"style="font-family: Khmer OS Siemreap; font-size: 18px;">ការចុះឈ្មោះចូលរៀនរបស់សិស្សនិស្សិត</h4>
                <!-- <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div> -->
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">អត្តលេខសិស្ស:</label>
                            <input type="text" class="form-control" placeholder="Enter your id" name="s_id" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ឈ្មោះសិស្ស:</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="s_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ភេទ:</label>
                            <select class="form-select" name="gender">
                                <?php
                                    $sql1 = "select * from gender";
                                    $query = mysqli_query($con,$sql1);
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $row['gd_name']; ?>"><?php echo $row["gd_name"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">អាយុ:</label>
                            <input type="number" class="form-control" placeholder="Enter your age" name="age" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ថ្ងៃ ខែ ឆ្នាំ កំណើត:</label>
                            <input type="date" class="form-control" placeholder="Enter your dob" name="dob" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ទីកន្លែងកំណើត:</label>
                            <input type="text" class="form-control" placeholder="Enter your pob" name="pob" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">លេខទូរស័ព្ទ:</label>
                            <input type="number" class="form-control" placeholder="Enter your phone" name="p_number" required>
                        </div>
                        <div class="col">
                            <label for="" class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">អុីមែល:</label>
                            <input type="text" class="form-control" placeholder="Enter your gmail" name="gmail" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">អាស័យដ្ឋាន:</label>
                            <input type="text" class="form-control" placeholder="Enter your address" name="address" required>
                        </div>
                        <div class="col">
                            <label class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ជំនាញ:</label>
                            <select class="form-select" name="skill">
                                <?php
                                    $sql1 = "select * from skill";
                                    $query = mysqli_query($con,$sql1);
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $row['sk_name']; ?>"><?php echo $row["sk_name"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col">
                            <label class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">ថ្នាក់:</label>
                            <select class="form-select" name="grade">
                                <?php
                                    $sql1 = "select * from grade";
                                    $query = mysqli_query($con,$sql1);
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $row['Gd_name']; ?>"><?php echo $row["Gd_name"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label"style="font-family: Khmer OS Siemreap; font-size: 18px;">វេន:</label>
                            <select class="form-select" name="shift">
                                <?php
                                    $sql1 = "select * from shift";
                                    $query = mysqli_query($con,$sql1);
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $row['sh_name']; ?>"><?php echo $row["sh_name"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Picture:</label>
                            <input type="file" class="form-control" placeholder="Enter your pic" name="pic" required>
                        </div>
                    </div>  -->
                    <button type="submit" class="btn btn-primary mt-2"style="font-family: Khmer OS Siemreap; font-size: 18px;" name="btnsave">រក្សាទុក</button>
                    <button type="reset" class="btn btn-danger mt-2"style="font-family: Khmer OS Siemreap; font-size: 18px;">ចាកចេញ</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include "Config.php";
    if(isset($_POST["btnsave"])){
        $s_id = $_POST["s_id"];
        $s_name = $_POST["s_name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $dob = $_POST["dob"];
        $pob = $_POST["pob"];
        $p_number = $_POST["p_number"];
        $gmail = $_POST["gmail"];
        $address = $_POST["address"];
        $skill = $_POST["skill"];
        $grade = $_POST["grade"];
        $shift = $_POST["shift"];
        // $pic = $_POST["pic"];
         $sql = "insert into students(s_id,s_name,gender,age,dob,pob,p_number,gmail,address,skill,grade,shift) 
         values('$s_id','$s_name','$gender','$age','$dob','$pob','$p_number','$gmail','$address','$skill','$grade','$shift')";
         $query = mysqli_query($con,$sql);
         if($query){
             echo"<script>alert('insert data successfully!!');<script>";
         }else{
             echo $sql;
         }
    }
?>