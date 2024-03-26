<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form action="" method="POST">
            <?php include "Product1.php"; ?>
            
            <?php include "Product2.php"; ?>
            
            <?php include "Product3.php"; ?>
            
            <?php include "Product4.php"; ?>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['btnsave'])){
        $pro1 = $_POST['pname1'];
        $qty1 = $_POST['qty1'];
        $price1 = $_POST['price1'];
        $pro2 = $_POST['pname2'];
        $qty2 = $_POST['qty2'];
        $price2 = $_POST['price2'];
        $total1 = $qty1 * $price1;
        $total2 = $qty2 * $price2;
        $total = $total1 + $total2;
        $discount ="";
        $payment ="";
        if($total >= 100 && $total < 500){
            $discount = "5";
            $payment = $total * 0.95;
        }else if($total >= 500 && $total < 1000){
            $discount = "10";
            $payment = $total * 0.90;
        }else if($total >= 1000){
            $discount = "15";
            $payment = $total * 0.85;
        }else{
            $discount = "0";
            $payment = $total; 
        }
        echo "
        <div class='row mt-1' id='table'> 
        <div class='col-sm-3'></div>
        <div class='col-sm-6'>
        <table class='table table-primary'>
        <h4 class='text-center text-white bg-primary rounded mt-1 p-2' style='font-family: Kh Writhand; font-size: 25px;'>វិក័យបត្រទូរទាត់ប្រាក់</h4>
        <tr><th class='text-white bg-success'>Product Name:</th><th class='text-primary bg-warning'>Quantity:</th><th class='text-white bg-info'>Price:</th><th class='text-white bg-danger'>Total:</th></tr>
        <tr>
        <td>$pro1</td> <td>$qty1 * </td> <td>$price1$ = </td> <td>$total1$</td>
        </tr>
        <tr>
        <td>$pro2</td> <td>$qty2 * </td> <td>$price2$ = </td> <td>$total2$</td>
        </tr>
        <tr>
        <td></td> <td> </td> <td>Total =</td> <td>$total$</td>
        </tr>
        <tr>
        <td></td> <td> </td> <td>Discount =</td> <td>$discount%</td>
        </tr>
        <tr>
        <td class='bg-info'></td> <td class='bg-info'> </td> <td class='text-white bg-info'>Payment =</td> <td class='bg-info'>$payment$</td>
        </tr>
        </table>
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