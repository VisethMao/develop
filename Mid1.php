<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <?php include "boostrap.php"; ?>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      color: #4CAF50;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .btn1 {
     background-color: red;
    }
    .form-group button {
      width: 100%;
      padding: 8px;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      margin-top: 1rem;
    }
    .result {
      margin-top: 20px;
      padding: 10px;
      text-align: center;
      font-weight: bold;
    }
    .result.success {
      color: #4CAF50;
    }
    .result.failed {
      color: #FF0000;
    }
    .img{
      width: 50%;
      height: 9rem;
      border-radius: 5rem;
      text-align: center;
      margin-left: 94px;
    }
    img{
      text-align: center;
    }
    .body{
      background: url('pic/backqround.jpg');
    }
  </style>
</head>
<body class="body">
    <div class="container mt-3">
      <form action="Mid1.php" method="POST">

          <?php include "loginform.php"; ?>

      </form>
    </div>
    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
      
        if ($username == 'Seth' && $password == '1122') {
          echo '<script>window.location.href = "Mid2.php";</script>';
        }else if($password != '1122' && $username != 'Seth' ){
          echo"<script>alert('Incorrect username and password!');</script>";
        }else if($username != 'Seth'){
          echo"<script>alert('Incorrect username!');</script>";
        }else if($password != '1122'){
          echo"<script>alert('Incorrect password!');</script>";
        }
      }
    ?>
</body>
</html>