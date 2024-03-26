<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Score</title>
    <?php include "boostrap.php"; ?>
    <Style>
        .text {
            margin-left: 33%;
            box-shadow: -0px 0px 10px -1px;
            width: 20rem;
            height: 510px;
            margin-top: 1%;
            color: blue;
            background-color: #99ccff;
        }
        input {
            width: 40%;
        }
        .main {
            display: flex;
        }
    </Style>
</head>
<body>
    <div class="container">
        <?php include "func2.php"; ?>
    </div>
    <?php
    function average()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Java = $_POST['Java'];
            $PHP = $_POST['PHP'];
            $Cisco = $_POST['Cisco'];
            $VB = $_POST['VB'];
            $Mail = $_POST['Mail'];
            $total = $Java + $PHP + $Cisco + $VB + $Mail;
            $average = $total / 5;
            if ($average >= 100  && $average <= 90) {
                $grade = 'A';
                $result = 'Pass';
            } elseif ($average >= 90  && $average <= 80) {
                $grade = 'B';
                $result = 'Pass';
            } elseif ($average >= 80  && $average <= 70) {
                $grade = 'C';
                $result = 'Pass';
            } elseif ($average >= 60  && $average <= 50) {
                $grade = 'D';
                $result = 'Pass';
            }elseif ($average >= 50  && $average <= 40) {
                $grade = 'E';
                $result = 'Pass';
            }else{
                $grade = 'F';
                $result = 'fail';
            }
            echo "
        <div class='container-fluid' id='table'>
        <div class='row mt-4'>
            <div class='col-sm-1'></div>
                <div class='col-sm-10'>
                <table class='table table bg-success'>
                <tr>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'><h4 class='text-info mt-2' style='font-family: Kh Writhand; font-size: 23px;'>ពិន្ទុសិស្ស</h4></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td><button class='btn btn-warning'>Add</button></td>
                </tr>
                <tr>
                    <th class='text-white'>Subjects:</th>
                    <th class='text-white text-center'>Java :</th>
                    <th class='text-white text-center'>PHP :</th>
                    <th class='text-white text-center'>Cisco :</th>
                    <th class='text-white text-center'>VB.net :</th>
                    <th class='text-white text-center'>Mail Server :</th>
                    <th class='text-white text-center'>Total :</th>
                    <th class='text-white text-center'>Average :</th>
                    <th class='text-white text-center'>Grade :</th>
                    <th class='text-white text-center'>Result :</th>
                </tr>
                <tr>
                <th class='text-white'>Score:</th>
                <td class='text-white text-center'>$Java</td>
                <td class='text-white text-center'>$PHP</td>
                <td class='text-white text-center'>$Cisco</td>
                <td class='text-white text-center'>$VB</td>
                <td class='text-white text-center'>$Mail</td>
                <td class='text-white text-center'>$total</td>
                <td class='text-white text-center'>$average</td>
                <td class='text-white text-center'>$grade</td>
                <td class='text-white text-center'>$result</td>
                </tr>
                <tr class='text-success'>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                </tr>
                </table>
                </div>
                <div class='col-1'></div>
            </div>
            </div>
            ";
        }
    }
    average();
    ?>
    <script>
        function remove(Clear) {
            let table = document.getElementById("table");
            table.remove();
        }
    </script>
</body>
</html>