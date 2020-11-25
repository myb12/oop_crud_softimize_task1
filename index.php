<?php
include_once 'db_config.php';
include_once 'Functions.php';
session_start();

if (isset($_POST['login'])) {
  $func = new Functions();
  $username=$_POST['username'];
  $password=$_POST['password'];
  // var_dump($username);die;
  $sql="SELECT * FROM users WHERE email='$username' AND password='$password'";
  $result=$func->db_connect -> query($sql); 
  if ($result -> num_rows) {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['logged_in']=true;
    header('Location: home.php');

  }
  else
  {
    $msg= "Username or Password Do not matched";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Please Log in first</h2>
        </div>
    </div>
     
   
    <div class="row">
       <div class="column column-60 column-offset-20">
        </div> 
    </div>
  <br>
  <br>
    <div class="row">
       <div class="column column-60 column-offset-20">
            <form  method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button type="submit" class="button-primary" name="login" >Log In</button>
            </form>
        </div> 
    </div>
    
</div>

</body>
</html>