<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include "boostrap.php"; ?>
    <style>
        .img{
            height: 290px;
            border-radius: 20px;
            border-bottom: 20px;
        }
        table, th, td {
        border: 1px solid blue;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row m-2">
        <img src="pic/img.avif" class=" btn img">
            <div class="col">
                <form method="POST" action="">
                    <div><h4 class="bg-success text-info  rounded text-center p-3" style="font-family: Khmer OS Siemreap; font-size: 18px;">ការសុំចុះឈ្មោះចូលរៀនរបស់សិស្សនិស្សិត</h4></div>
                    
                    <?php include "form1.php"; ?>
                
                    <?php include "form2.php"; ?>
                    
                    <?php include "form3.php"; ?>
                    
                    <?php include "form4.php"; ?>
                    
                    <?php include "form5.php"; ?>
                    
                    <?php include "form6.php"; ?>
                    
                    <?php include "form7.php"; ?>
                    
                </form>  
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['btnsave'])){
        $sname = $_POST['sname'];
        $sid = $_POST['sid'];
        $gender = $_POST['txtgender'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $birth = $_POST['brth'];
        $address = $_POST['addr'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $skill = $_POST['skill'];
        $grade = $_POST['grade'];
        $shift = $_POST['shift'];
        echo"<div class='container-fluid'>";
        echo"<div class='row m-1'>";
        echo"<center>";
        echo"<table class='table w-50'>";
        echo"<tr>";
            echo"<td colspan='2'><h4 class='bg-primary p-3 text-warning text-center rounded' style= 'font-family: Khmer OS Siemreap; font-size: 18px;'>ព័ត៌មានរបស់សិស្ស</h4></td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Student Name :</td> <td>$sname</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Student ID :</td> <td>$sid</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Gender :</td> <td>$gender</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Age :</td> <td>$age</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Date Of Birth :</td> <td>$date</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Place Of Birth :</td> <td>$birth</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Address :</td> <td>$address</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Email :</td> <td>$mail</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Phone :</td> <td>$phone</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Skill :</td> <td>$skill</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Grade :</td> <td>$grade</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td class='text-primary'>Shift :</td> <td>$shift</td>";
        echo"</tr>";
        echo"</table>";
        echo"</center>";
        echo"</div>";
        echo"</div>";
    }
    ?>
</body>
</html>