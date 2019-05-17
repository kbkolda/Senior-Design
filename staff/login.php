<?php 
session_start();

?>

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
  </head>
  <body>
    <div class="container">
        
        <form class="form-signin"method="post" action="../login_func/login-check">
        <h1>Early Childhood Center Staff Scheduling</h1>
        <h2 class="form-signin-heading">Login</h2>
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