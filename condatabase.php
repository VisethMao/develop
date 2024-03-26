<?php 
     //Create connection
     $host = "localhost";
     $tbl_staff = "root";
     $Password = "";
     $db = "Staff";
     //Create Condition database
     $connect = mysqli_connect($host,$tbl_staff,$Password,$db);
     //check connecting
    if(!$connect){
        die("connect error".mysqli_connect_error());
    }
    else{
        echo'
        <table class="table" >
        <tr>
            <td class= "font">Host</td>
            <td>:</td>
            <td> $host </td>
            </tr>
                <tr>
            <td class= "font">User Name</td>
            <td>:</td>
            <td> $username </td>
            </tr>

            <tr>
            <td class= "font">Password</td>
            <td>:</td>
            <td></td>
            </tr>
            <tr>
            <td class= "font">Database Name</td>
            <td>:</td>
            <td> $staff</td>
            </tr>
            </table>
            </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
  
  
        ';
    }
?>
