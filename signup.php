
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>

  <!-- DON'T CHANGE -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- PHP CODE  -->
<?php
require'dbcon.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name = $_POST['name'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if($pass1==$pass2)
{
$sql = "INSERT INTO `data`(`name`, `email`, `password`) VALUES ('$name','$email','$pass1')";
$fire=mysqli_query($con,$sql); 
if($fire== true) 
{
 echo '<script>swal("Success!", "You are now registered!", "success");</script>';
}

}
else{
  echo '<script>swal("Opps!", "Password not matched!", "warning");</script>';
}

}
?>

<!-- END -->
    <div class="main-body">
      <div class="main">
        <div class="form">
          <h1>Signup</h1>

          <form action="<?php echo $_SERVER['iiPHP_SELF']; ?>" method="POST">
            <div class="field f1">
              <i class="fa-solid fa-user"></i>
              <input
                type="text"
                placeholder="Your Name"
                id="name"
                name="name"
                p
                required
              />
            </div>
            <div class="field f2">
              <i class="fa-solid fa-envelope"></i>
              <input
                type="email"
                placeholder="Your Email"
                id="email"
                name="email"
                required
                
              />
            </div>
            <div class="field f3">
              <i class="fa-solid fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                id="pass"
                name="pass1"
                required
                
              />
            </div>
            <div class="field f4">
              <i class="fa-solid fa-key"></i>
              <input
                type="password"
                placeholder="Repeat your password "
                id="pass2"
                name="pass2"
                
                required
              />
            </div>

            <div class="agree-main">
              <input class="check" type="checkbox" />
              <span class="agree">
                I agree all statements in
                <span id="term"
                  >Terms of <br />
                  &nbsp;&nbsp; &nbsp; service
                </span>
              </span>
            </div>

            <input type="submit" value="Register" class="btn">
              <!-- <div class="btn"><p>Register</p></div> -->
            
          </form>
        </div>
        <div class="img"></div>
      </div>
    </div>
  </body>
</html>
