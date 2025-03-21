<!DOCTYPE html>
<html>

<head>
  <title>Sign Up • Instagram</title>
  <link rel="stylesheet" href="sign.css">
  <link rel="icon" type="image/x-icon" href="images/logo.webp">
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="images/image.png" alt="Instagram Logo">
    </div>
    <p>Sign up to see photos and videos from your friends.</p>
    <button class="btn" >
      <a href="fb.php">Log in with Facebook</a>
    </button>
    <div class="or">
      OR
      <div class="or-line"></div>
    </div>
    <form method="post">
      <input type="text" name="em" class="input-field" placeholder="Mobile number or email address">
      <input type="text" name="snm" class="input-field" placeholder="Full Name">
      <input type="text" name="unm" class="input-field" placeholder="Username">
      <input type="password" name="ps" class="input-field" placeholder="Password">
    
    <div class="text">
      <p>People who use our service may have uploaded your contact information to Instagram. <a
          href="https://www.facebook.com/help/instagram/261704639352628">Learn more</a>
      </p>
      <p>By signing up, you agree to our <a href="https://help.instagram.com/581066165581870/?locale=en_GB">Terms</a>,
        <a href="https://www.facebook.com/privacy/policy">Privacy Policy</a> and <a
          href="https://privacycenter.instagram.com/policies/cookies/">Cookies
          Policy</a>.</p>
    </div>
    <input class="btn" type="submit" name="sb" value="Sign Up"></form>
    <div class="footer">
      Have an account? <a href="index.php">Log in</a>
    </div>
  </div>

    
<?php
$server="localhost";
$username="root";
$password="";
$dbname="signup";

$con = mysqli_connect ($server , $username , $password , $dbname);
if(isset($_POST["sb"]))
{
    $email=$_POST["em"];
    $sname=$_POST["snm"];
    $uname=$_POST["unm"];
    $pass=$_POST["ps"];
    $query="insert into data (email,sname,uname,pass) values ('$email','$sname','$uname','$pass')";
    $run=mysqli_query($con,$query);
}
?>
</body>

</html>