<?php
include 'connect.php';
session_start();
?>

<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql2 = "SELECT * FROM profile WHERE id = '$id';";
    $result3 = mysqli_query($connect, $sql2);

    if ($result3) {
        $row = mysqli_fetch_assoc($result3);

        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $phone = $row['phone'];
        $province = $row['province'];
        $city = $row['city'];
        $address = $row['address'];
        $password = $row['password'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWW.greenland.com</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myScript.js"></script>
</head>
<body>
    <!--Header Start-->
    <header class="head">

        <div id="logo">
            <a href="home.html"><img class="logo" src="greenland.jpg" alt="Image Not Found" width="103px" height="103px"></a>
         </div>

        <div id="login">
            <a href=""><img class="login" src="login.jpg" alt="Image Not Found" width="103px" height="103px"></a>
        </div>

        <div id="note">
            <p>Green Land</p>
            <p> </p>
        </div>

        <ul id="navi">
            <li id="navi"><a href = "">Home</a></li>
            <li id="navi"><a href = "">Lands</a></li>
            <li id="navi"><a href = "">About Us</a></li>
            <li id="navi"><a href = "">Contact Us</a></li>
            <input type="text" placeholder="Search..">
        </ul>

    </header>
    <!--Header End-->
    <br>
    <br>
    <br>

    <!--Slide Show Start-->
 <body>

<fieldset style="width: 700px; background-color: #f2f2f2;">

 <form action="#" method="POST">



<h1><center>My Profile</center></h1>
<p align="right"> <input type="button"value="My Ads"butoon align="right">  <input type="button"value="Post Ad"></right></p>
<p><img src="https://clipground.com/images/white-profile-icon-png-9.png"width="100">User's Name</p>
<center>
Full name :
<input type="text" name="fullname" placeholder="enter your name" value="<?php if (isset($fullname)) { echo $fullname; } ?>" disabled /><br><br>

Gender :
<input type="text" name="gender" placeholder="enter your gender" value="<?php if (isset($gender)) { echo $gender; } ?>" disabled /><br><br>

Email :
<input type="text" name="email" placeholder="enter your email" value="<?php if (isset($email)) { echo $email; } ?>" disabled /><br><br>

Phone Number :
<input type="text" name="phone" placeholder="enter your phone" value="<?php if (isset($phone)) { echo $phone; } ?>" disabled /><br><br>

Province :
<input type="text" name="province" placeholder="enter your province" value="<?php if (isset($province)) { echo $province; } ?>" disabled /><br><br>

City :
<input type="text" name="city" placeholder="enter your city" value="<?php if (isset($city)) { echo $city; } ?>" disabled /><br><br>

Address :
<input type="text" name="address" placeholder="enter your address" value="<?php if (isset($address)) { echo $address; } ?>" disabled /><br><br>

Password :
<input type="text" name="password" placeholder="enter your password" value="<?php if (isset($password)) { echo $password; } ?>" disabled /><br><br>

</center>

<input type="submit" name="delete" value="Delete" class="formbold-btn formbold-btn-primary formbold-btn-lg">


</form>
</fieldset>
</body>


<!--Footer Start-->
<footer>

    <div class="first">
        
        <h4>Support Now</h4>
        <h5>Reset Password</h5>
        <h5>Tel - 0702045513</h5>
        <h5>Email - greenland@gmail.com</h5>
    </div>

    <div class="third">
        Locate Us
        <a href="https://www.google.com/maps/place/Sri+Lanka+Institute+of+Information+Technology/@6.9146775,79.9707558,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!8m2!3d6.9146775!4d79.9729445" style="color: white;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;"></i></a>
        <br><br><br><br><br><br><br>
        
    </div>

    <div class="second">
        Find Us :
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
        <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
        <h3>Quick Links</h3>
        <a class="foot" href="">Gallery</a><br>
        <a class="foot" href="">Privacy & Policy</a><br>
        <a class="foot" href="">Terms & Conditions</a><br>
    </div>

</footer>
<!--Footer End-->


</body>

</html>

<?php
if (isset($_POST['delete'])) {
    $id = $_SESSION['id'];

    $deletesql = "DELETE FROM profile WHERE id = $id;";
    $delete = mysqli_query($connect, $deletesql);
    session_destroy();
    header("location:profiledashboard.php");
}

mysqli_close($connect);
?>
