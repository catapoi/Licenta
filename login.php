<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Login Page">
    <meta name="author" content="Catalin Poienaru">
    <link rel="icon" href="pics/favicon.ico" type="image/x-icon">

    <title>Login Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <?php    
    $msg = '';
    if (isset($_POST['email']) && !empty($_POST['parola'])) {
             if ($_POST['email'] == 'catapoi@gmail.com' &&
                $_POST['parola'] == '1234') {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();

                header("Location:index.php");
             }else {
                $msg = 'Wrong username or password';
             }
          }
     ?>

    <div class="container">

      <form class="form-signin" action = " <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
        <h2 class="form-signin-heading">Va rugam sa va logati!</h2>
        <label for="inputEmail" class="sr-only">Adresa Email</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Adresa Email" required autofocus>
        <label for="inputPassword" class="sr-only" >Parola</label>
        <input type="password" id="inputPassword" class="form-control" name="parola" placeholder="Parola" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
