
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <!-- don't change -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- PHP CODE DONT OVERWRITE -->
<?php
require'dbcon.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $sql = "select * from `data` where email ='$email' and password='$pass'";
  $fire = mysqli_query($con,$sql);
  $num=mysqli_num_rows($fire );
  if($num>=1)
  {
   echo '<script>window.location.href = "http://localhost/web/index.php";</script>';
  }
  else
{
  echo '<script>swal("Opps!", "Invalid Credentials!", "warning");</script>';
}
}
?>

<!-- end -->


    <div class="main-body">
      <div class="main">
        <div class="img"></div>
        <div class="form">
          <div class="main-logo">
            <div class="logo"></div>
            <h1>Royal Rishi</h1>
          </div>
          <div class="signin"><h3>Sign into your account</h3></div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input
              type="email"
              placeholder="Email address"
              id="email"
              required
              name="email"
            />
            <input
              type="password"
              placeholder="Password"
              id="pass"
              name="pass"
              name="password"
              required
            />

            <a href="index.html">
              <!-- <div class="btn"><p>LOGIN</p></div> -->
              <input
                type="submit"
                class="btn"
                value="SUBMIT"
                style="padding-bottom: 10px"
              />
            </a>
          </form>
          <a href="">
            <h3 class="fp">Forgot Password?</h3>
          </a>
          <a href="signup.php">
            <p class="register">Don't have an account? Register here</p>
          </a>

          <p class="pri">Terms of use. Privacy policy</p>
        </div>
      </div>
    </div>
  </body>
</html>
