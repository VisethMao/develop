<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <?php include "boostrap.php"; ?>
    <style>
        label {
            color: rgb(3, 95, 3);
        }
        .Position {
            width: 1800;
            position: fixed;
        }
        .over {
            height: 200px;
            overflow-y: auto;
        }
        a {
            text-decoration: none;
        }
        .font {
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }
        .img{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-2">
        
        <?php include "Midterm1.php"; ?>

        <?php include "Midterm3.php"; ?>

        <div class="row mt-3">

        <div class="col-sm-1"></div>

        <?php include "Midterm2.php"; ?>

        <?php
        if(isset($_POST['btnsave'])){
        $ctn = $_POST['ctn'];
        $qty = $_POST['qty'];
        $odp = $_POST['odp'];
        $odd = $_POST['odd'];
        $payment = $_POST['payment'];
        $dly = $_POST['dly'];
        $phone = $_POST['phone'];
        $price = $_POST['price'];
        $location = $_POST['location'];
        $tkd = $_POST['tkd'];
        $sell = $_POST['sell'];
        $total = $price * $qty ;
        $pay = $dly + $total;
        echo "
        <div class='container-fluid'>
        <div class='row' id='table'> 
        <div class='col-sm-1'></div>
        <div class='col-sm-10'>
        <table class='table table-primary'>
        <h4 class='text-center text-white bg-primary rounded mt-1 p-2' style='font-family: Kh Writhand; font-size: 25px;'>វិក័យបត្រទូរទាត់ប្រាក់</h4>
        <tr>
        <th class='text-success'>Order Date: $odd</th><th class='text-success'>Take Date: $tkd</th> <th>
        <button type='reset' class='btn bg-danger text-white' name= 'btncancel'>
        Delete
        </button>
        <button type='Edit' class='btn bg-primary text-white' name='btncancel'>
        Edit
        </button>
        </th>
        </tr>
        <tr>
        <td>Customer Name: $ctn</td><td>Phone Number: $phone</td><td>Product Name: $odp</td>
        </tr>
        <tr>
        <td>Quantity : $qty Kg</td><td>Price : $price Reil</td><td>Delivery : $dly Reil</td>
        </tr>
        <tr>
        <th class='text-danger'>Total Price : $pay Reil</th><th class='text-danger'>Payment : $payment</th><th class='text-danger'>Sell : $sell</th>
        </tr>
        <tr>
        <td>Location : $location</td><td></td><td></td>
        </tr>
        </table>
        </div>
        <div class='col-sm-1'></div>
        </div>
        </div>
        ";
    }
    ?>
    <script>
        function remove(Clear){
            let table = document.getElementById("table");
            table.remove();
        }
    </script>
</body>
</html>