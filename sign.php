
<?php

if(isset($_POST['submit'])){
     include "database.php";
     $email = $_POST['email'];
     $name = $_POST['name'];
     $password = $_POST['password'];
     $cnf_password = $_POST['cnf_password'];
     if($password == $cnf_password){
          $password = md5($password);
          $sql = "INSERT INTO user ( name, email, pass) VALUES ('$name', '$email', '$password')"; 
          echo $sql;
          if(mysqli_query($conn, $sql)){
               header('location:test.html');
          }
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
      <title>Sign UP</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
</head>
<body>
     <marquee behavior="" direction="right"><h1>:: MCA COffee Wala ::</h1></marquee>
     
      <div class="mt-5">
     <div class="container rounded p-4 shadow">
        <form action="" method="post">
             <h1 >: Sign up :</h1>
             <div class="form-group">
                  <label for="email">Email id</label>
                  <input id="email" name="email" type="text" class="form-control" autofocus required>
             </div>
             <div class="form-group">
                  <label for="name">User name</label>
                  <input type="text" id="name" name="name" class="form-control" required>
             </div>
             <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" required>
             </div>
             <div class="form-group">
                  <label for="cnf_password">Confirm Password</label>
                  <input type="password" id="cnf_password" name="cnf_password" class="form-control" required>
             </div>
           
             <div>
                  <input type="submit" class="btn btn-success mt-4" name="submit" value="Register">
                  <a href="login.php" class="btn btn-primary mt-4">Login</a>
                  
            </div>
     </div> 
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></>
</body>
</html>

