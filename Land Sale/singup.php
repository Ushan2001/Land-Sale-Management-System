<?php
session_start();
include "connect.php";

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    

    $sql1 = "INSERT INTO signup(firstname, lastname, phone, email, password, confirm) VALUES ('$firstname', '$lastname', '$phone', '$email', '$password', '$confirm')";
    $result = mysqli_query($connect, $sql1);
//check the if condtion 
    if($result) {
        $sql2 = "SELECT * FROM signup WHERE firstname = '$firstname'";
        $result2 = mysqli_query($connect, $sql2);
        $row = mysqli_fetch_assoc($result2);

        $ID = $row['ID'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
        $confirm = $row['confirm'];
       
        // Create sessions
        $_SESSION['ID'] = $ID;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['confirm'] = $confirm;
       

        // Redirect to appointment page
        header('Location:http://localhost/Land%20Sale/singup%20Dashbord.php');
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
    <fieldset class="fie1" style="width:400px,length : 600px;" >
    <h3>Singup Details</h3>
        <form action="#" method="POST">

            First Name : 
            <input type="text" name="firstname" placeholder="enter your firstname" /><br><br><br>

            Last Name :
            <input typr="text" name="Last Name" placeholder="Enter your lastname" /><br><br><br>

            Phone Number :
            <input type="text" name="phone" placeholder="Enter your phone number" /><br><br><br>

            Email Address :
            <input type="text" name="email" placeholder="Enter your email" /><br><br><br>

            Password :
            <input type="password" name="password" placeholder="Enter your Password" /><br><br><br>

            Confirm Password :
            <input type="password" name="confirm" placeholder="Enter your Confirm password" /><br><br><br>


            <button type="submit" name="submit" class="formbold-btn formbold-btn-primary formbold-btn-lg">Submit</button>

        </form>

    </fieldset>

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