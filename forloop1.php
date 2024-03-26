<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPI</title>
    <?php include "boostrap.php"; ?>
    <style>
      .a {
        color: blue;
        font-weight: bolder;
      }
      .b{
        color: lightgray;
        margin-right: 5px;
      }
       .c{
         color: white;
        
      }
      .table{
        box-shadow: 0.5px 0.5px 5px 0.5px ;
        box-sizing: content-box;
        margin: 1rem;
      }
      .table1{
        box-shadow: 0.5px 0.5px 5px 2px;
        box-sizing: content-box;
        color: blue;
        margin: 2rem;
       
        /* margin-right: 1px ; */
      }
    </style>
</head>
<body>
    <?php
    $row2 =1;
    $row =1;
    $row3 =1;
    $num1 =1 ;
    $num2 =1 ;
    $num3 =1 ;
    echo'<div class="container">'; 
    echo"<h4 style='font-family:Algerian;font-size: 50px;' class='bg-primary text-white text-center p-1 mt-2 rounded'>PPI</h4>";
    echo'<div class="row">';
    echo'<div class="col-sm-1">';
    echo"</div>";
    echo'<div class="col-sm-2 mt-5">';
    echo" <table  class= 'btn table1 table-borderless' >";
    while($row2<=8){
            echo"<tr>";
            $col2=1;
            while($col2<=8){
              echo"<td>";
              if($num2>=1 && $num2<=8){
              echo"<h5 class = 'a'> *<h5>";
              }
              elseif ($num2==9) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==17) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==25) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==16) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==24) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==32) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2>=33 && $num2<=40) {
               echo"<h5 class = 'a'> *<h5>";
              }
              elseif ($num2==41) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==49) {
                echo"<h5 class = 'a'> *<h5>";
               }
              elseif ($num2==57) {
                echo"<h5 class = 'a'> *<h5>";
               }
               else {
                 echo "<h5 class = 'c'>$num2</h5>
                ";
              }
              echo"</td>";
              $col2+=1;
              $num2+=1;
            }
            echo "</tr>";
            $row2++;
         }
    echo" </table>";
    echo"</div>";
    echo'<div class="col-sm-1">';
    echo"</div>";
    echo'<div class="col-sm-2 mt-5">';
    echo" <table  class= 'btn table1 table-borderless' >";
    while($row<=8){
            echo"<tr>";
            $col=1;
            while($col<=8){
              echo"<td>";
              if($num1>=1 && $num1<=8){
                echo"<h5 class = 'a'> *<h5>";
                }
                elseif ($num1==9) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==17) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==25) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==16) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==24) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==32) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1>=33 && $num1<=40) {
                 echo"<h5 class = 'a'> *<h5>";
                }
                elseif ($num1==41) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==49) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                elseif ($num1==57) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 else {
                   echo "<h5 class = 'c'>$num1</h5>
                  ";
                }
              echo"</td>";
              $col+=1;
              $num1+=1;
            }
            echo "</tr>";
            $row++;
         }
    echo" </table>";
    echo"</div>";
    echo'<div class="col-sm-1">';
    echo"</div>";
    echo'<div class="col-sm-2 mt-5">';
    echo" <table  class= 'btn table1 table-borderless' >";
    while($row3<=8){
            echo"<tr>";
            $col3=1;
            while($col3<=9){
              echo"<td>";
              if($num3>=1 && $num3<=9){
                echo"<h5 class = 'a'> *<h5>";
                }
                elseif ($num3>=64 && $num3<=72) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==14) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==23) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==32) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==41) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==50) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 elseif ($num3==59) {
                  echo"<h5 class = 'a'> *<h5>";
                 }
                 else {
                   echo "<h5 class = 'c'>$num3</h5>
                  ";
                }
              echo"</td>";
              $col3+=1;
              $num3+=1;
            }
            echo "</tr>";
            $row3++;
         }
    echo" </table>";
    echo"</div>";
    echo'<div class="col-sm-3">';
    echo"</div>";
    echo"</div>";
    echo"</div>";
     ?>
</body>
</html>