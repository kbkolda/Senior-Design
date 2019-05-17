<?php 
session_start();

?>

<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="/admin/login_func/images/favicon.ico"/>
    <link rel="shortcut icon" type="image/ico" href="http://peacebrookingscalendar.com/admin/login_func/images/favicon.ico"/>
  </head>
  <body>
    <div class="container">
        <img src="images/image0.jpg" class="center" style="width:200; height:265;">
        <form class="form-signin"method="post" action="../login_func/login-check">
        <h1>Early Childhood Center Scheduling</h1>
        <h2 class="form-signin-heading">Administrator Login</h2>
        <input type="text" class="form-control" name="username" value="" placeholder="Username" required autofocus>
        <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
        		<?php
		    
		    if (isset($_SESSION['errors'])): ?>
          <div class="form-errors">
          <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
          <?php endforeach; ?>
         </div>
          <?php endif; ?>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
  

</html>