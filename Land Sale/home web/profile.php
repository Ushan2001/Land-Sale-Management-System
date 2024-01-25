<?php
session_start();
include "connect.php";

if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    

    $sql1 = "INSERT INTO profile(fullname, gender, email, phone, province, city, address, password) VALUES ('$fullname', '$gender', '$email', '$phone', '$province', '$city', '$address', '$password')";
    $result = mysqli_query($connect, $sql1);
//check the if condtion 
    if($result) {
        $sql2 = "SELECT * FROM profile WHERE fullname = '$fullname'";
        $result2 = mysqli_query($connect, $sql2);
        $row = mysqli_fetch_assoc($result2);

        $id = $row['id'];
        $fullname = $row['fullname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $phone = $row['phone'];
        $province = $row['province'];
        $city = $row['city'];
        $address = $row['address'];
        $password = $row['password'];
    
        // Create sessions
        $_SESSION['id'] = $id;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['gender'] = $gender;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['province'] = $province;
        $_SESSION['city'] = $city;
        $_SESSION['address'] = $address;
        $_SESSION['password'] = $password;
        

        // Redirect to appointment page
        header('Location:http://localhost/home%20web/profiledashboard.php');
        exit;
    }
    else {
        echo "Error: " . mysqli_error($connect);
    }
}

mysqli_close($connect);
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
            <a href="http://localhost/Land%20Sale/Home%20web/profile.php"><img class="login" src="login.jpg" alt="Image Not Found" width="103px" height="103px"></a>
        </div>

        <div id="note">
            <p>Green Land</p>
            <p> </p>
        </div>

        <ul id="navi">
            <li id="navi"><a href = "http://localhost/Land%20Sale/IWT%20Assigment/">Home</a></li>
            <li id="navi"><a href = "http://localhost/Land%20Sale/Land%20add/add%20(1).html">Lands</a></li>
            <li id="navi"><a href = "http://localhost/Land%20Sale/About%20us/about%20us.html">About Us</a></li>
            <li id="navi"><a href = "http://localhost/Land%20Sale/chamindu/CONTACT%20US.php">Contact Us</a></li>
            <li id="navi"><a href = "http://localhost/Land%20Sale/login/11111/login.html">Login</a></li>
            <li id="navi"><a href = "http://localhost/Land%20Sale/singup.php">Singup</a></li>
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
<input type="text" name="fullname" placeholder="enter your name"><br><br>

Gender :
<input type="text" name="gender" placeholder="enter your gender"><br><br>

Email :
<input type="text" name="email" placeholder="enter your email"><br><br>

Phone Number :
<input type="text" name="phone" placeholder="enter your phone"><br><br>

Province :
<input type="text" name="province" placeholder="enter your province"><br><br>

City :
<input type="text" name="city" placeholder="enter your city"><br><br>

Address :
<input type="text" name="address" placeholder="enter your address"><br><br>

Password :
<input type="text" name="password" placeholder="enter your password"><br><br>

</center>

<input type="submit" name="submit" value="submit" class="formbold-btn formbold-btn-primary formbold-btn-lg">


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