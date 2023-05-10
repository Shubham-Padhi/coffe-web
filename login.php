<?php

if(isset($_POST['submit'])){
     $email = $_POST['email'];
     $password = md5($_POST['pass']);
     require_once 'database.php';
     $sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";

     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result)>0){
          header('location:test.html');
     }
     else{
          echo '<script>alert("password dekhantu kichhi bhul achiki")</script>';
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
</head>
<body>
     <marquee behavior="" direction="right"><h1>:: login page ::</h1></marquee>
     
     <div class="main">
     <div class="container shadow rounded p-4">
        <form action="" method="post">
             <h1 >: Login :</h1>
             <br>
             <div class="form-group">
                  <label for="">Email id</label>
                  <input type="text" class="form-control" id="email" name="email" autofocus required>
             </div>
             <div class="form-group">
                  <label for="pass">Password</label>
                  <input type="password" id="pass" name="pass" class="form-control" required>
             </div>
     
             <div>
               <input type="submit" class="btn btn-success mt-4" name="submit" value="Login">
               <a href="sign.php" class="btn btn-primary mt-4">Register</a>
               
         </div>
            
      </form>
     </div> 
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
