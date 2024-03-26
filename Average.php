<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average</title>
    <?php include "boostrap.php"; ?>
</head>
<style>
    .table_view{
        width: 50%;
    }
    .tr_head{
        background-color: blue;
        width: 200px;
        height: 80px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 1.5rem;
        align-items: center;
        text-align: center;
        margin-bottom: 5px;
    }
    input{
        border-radius: 7px;
    }
    .font{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    .btn{
        background-color: red;
        color: white;
    }
 </style>
<body>
    <div class="container mt-2">
        <?php include "Avg.php"; ?>
</div>
    <div class="container">
        <?php include "Avg1.php"; ?>
    </div>
</body>
</html>