<div class="row">
            <div class="col d-flex justify-content-center">
            <?php 
if(isset($_POST['btnsubmit'])){
$PHP =$_POST['PHP'];
$VB = $_POST['VB'];
$ASP = $_POST['ASP'];
$n1 = $PHP;
$n2 = $VB;
$n3 = $ASP;
$total = $n1+$n2+$n3;
$Average = $total / 3;
$Result;
 if($Average > 50){
    $Result = "Pass";
 }else{$Result = "Failed";}
echo"<table class= 'table w-50 table-hover' border='2'>";
echo"<tr>";
     echo"<td colspan='2'><h5 class='bg-success p-2 text-white text-center rounded' style='font-family: Khmer OS Siemreap'>លទ្ធផលរបស់សិស្ស</h5></td>";
     echo"</tr>";
     echo"<tr>";
     echo"<td>Total :</td> <td> $total</td>";
     echo"</tr>";     
     echo"<tr>";
     echo"<td>Average :</td> <td>$Average</td>";
     echo"</tr>";  
     echo"<tr>";
     echo"<td>Result :</td> <td>$Result</td>";
     echo"</tr>";  
echo"</table>";
}
?>
</div>
</div>