<?php
define("IS_ROOT",1);
session_start();
require 'config.php';
if(isset($_POST['btnSubmit'])&&@$_POST['username']){
    if($_authencation[$_POST['username']]==$_POST['password']){
        $_SESSION['is_login']=1;
       header("Location:.");
    }else{
        die("Login failed");
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please login to use this function</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        
        <button class="btn btn-lg btn-primary btn-block" name="btnSubmit" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
