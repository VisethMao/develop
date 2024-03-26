<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <?php 
    echo "<div class='container-fluid'>";
        echo "<h4 class='text-center text-danger mt-1 p-1 m-1' style='font-family:Algerian'>Registration Student:</h4>";
        echo "<div>";
            echo "<select class='p-2 m-2 btn bg-info'>";
                echo "<option value='B'>Bachelor Of Information Technology</option>";
                echo "<option value='S'>Management University</option>";
                echo "<option value='S'>Rule University Phnom Penh</option>";
            echo "</select>";
        echo "<table>";
            echo "<h5 class='text-center text-white bg-secondary rounded m-2 p-2'>Student Registration</h5>";
        echo "</table>";
            echo "<label class='text-primary m-2 p-2 col-md-2 rounded'>Student Name :</label>";
                echo "<input type='text' class='m-1 btn bg-info border-bottom rounded'>";
                echo "<div class='bg-secondary m-2 rounded'>";
            echo "<label class='m-2 col-md-2 text-white'>Student Sex :</label>";
            echo "<select class='p-1 btn bg-info'>";
                echo "<option value='M'>Male</option>";
                echo "<option value='F'>Female</option>";
            echo "</select>";
                echo "</div>";
                echo "<div>";
                    echo "<label class='text-primary m-2 p-2 col-md-2 rounded'>Date Of Birth :</label>";
                    echo "<input type='text' class=' btn bg-info border-bottom rounded'>";
                echo "</div>";
                echo "<div class='bg-secondary m-2 rounded'>";
                    echo "<label class='text-white m-1 p-1 col-md-2'>Student Phone :</label>";
                    echo "<input type='text' class='m-1 btn bg-info border-bottom rounded'>";
                echo "</div>";
                echo "<div>";
                    echo "<label class='text-primary m-2 p-2 rounded col-md-2'>Current Address :</label>";
                    echo "<input type='text' class=' btn bg-info border-bottom rounded'>";
                echo "</div>";
                echo "<div class='mt-1 bg-secondary m-2 rounded'>";
                    echo "<button class='btn bg-primary rounded m-2 p-1 button text-white'>Register</button>";
                    echo "<button class=' btn bg-danger rounded text-white m-2 p-1'>Cancel</button>";
                echo "</div>";
        echo "</div>";
    echo "</div>";
    ?>
</body>
</html>