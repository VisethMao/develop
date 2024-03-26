<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "boostrap.php"; ?>
</head>
<body>
    <?php
        echo"<div class='container-fluid'>";
            echo"<div class='row'>";
                echo"<div class='col-sm'>";
                echo'
                <table class="table  table-striped ">
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
                </table>
                ';
                echo"</div>";
            echo"</div>";
        echo"</div>";
    ?>
</body>
</html>