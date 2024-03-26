<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="row">
            <?php
            $qty=20;
            $price=12;
            $discount=5;
            $tax=7;
            $sum=($qty*$price);
            $sum2=$sum*($discount/100);
            $sum3=($tax/100)*($sum-$sum2);
            $total=($sum-$sum2)+$sum3;
            ?>

            <div class="col mt-4">
                <table class="table-bordered h2 p-5 m-5 text-center shadow-lg p-3 mb-5 bg-body rounded" style="font-family:AKbalthom Kbach">
                
                <tr>
                    <td colspan="2" class="text-center text-white p-3 bg-success">វិក័យបត្រ</td>
                </tr>
                <tr>
                    <td class="p-2" style="width:350px;">ចំនួន</td>
                    <td style="width:250px;"><?php echo($qty);echo("") ?></td>
                </tr>
                <tr>
                    <td class="p-2">តម្លៃ</td>
                    <td><?php echo("$"); echo($price)?></td>
                </tr>
                <tr>
                    <td class="p-2">បញ្ចុះតម្លៃ</td>
                    <td><?php echo($discount);echo("%") ?></td>
                </tr>
                <tr>
                    <td class="p-2">ពន្ធ</td>
                    <td><?php echo($tax);echo("%") ?></td>
                </tr>
                <tr>
                    <td class="p-2">សរុប</td>
                    <td><?php echo("$");echo($total)?></td>
                </tr>
                </table>
            </div>
            <div class="col mt-4">
                <table class="table-bordered h2 p-5 m-5 shadow p-3 mb-5 bg-body rounded" style="font-family:Times New Roman">
                
                <tr>
                    <td colspan="2" class="text-center text-white p-3 bg-success">Invoice</td>
                </tr>
                <tr>
                    <td class="p-2 " style="width:350px;">Total</td>
                    <td class="Text-Right" style="width:250px;"><?php echo(" $ ");echo($sum);echo(".00") ?></td>
                </tr>
                <tr>
                    <td class="p-2">Discount</td>
                    <td><?php echo(" $ "); echo($sum2);echo(".00")?></td>
                </tr>
                <tr>
                    <td class="p-2">Total price</td>
                    <td><?php echo(" $ ");echo($sum-$sum2);echo(".00") ?></td>
                </tr>
                <tr>
                    <td class="p-2">Tax</td>
                    <td><?php echo(" $ ");echo($sum3) ?></td>
                </tr>
                <tr>
                    <td class="p-2">Payment</td>
                    <td><?php echo(" $ ");echo($total) ?></td>
                </tr>
                </table>
            </div>
    </div>
</body>
</html>