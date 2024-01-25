<?php
include 'connect.php';
session_start();
?>

<?php
if (isset($_SESSION['ID'])) {
    $ID = $_SESSION['ID'];
    $sql2 = "SELECT * FROM signup WHERE ID = '$ID';";
    $result3 = mysqli_query($connect, $sql2);

    if ($result3) {
        $row = mysqli_fetch_assoc($result3);

        $ID = $row['ID'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
        $confirm = $row['confirm'];
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
    <fieldset class="fie1" style="width:400px,length : 600px;" >
    <h3>Singup Details</h3>
        <form action="#" method="POST">

            First Name : 
            <input type="text" name="firstname" placeholder="enter your firstname" value="<?php if (isset($firstname)) { echo $firstname; } ?>" disabled/><br><br><br>

            Last Name :
            <input typr="text" name="Last Name" placeholder="Enter your lastname" value="<?php if (isset($lastname)) { echo $lastname; } ?>" disabled/><br><br><br>

            Phone Number :
            <input type="text" name="phone" placeholder="Enter your phone number" value="<?php if (isset($phone)) { echo $phone; } ?>" disabled/><br><br><br>

            Email Address :
            <input type="text" name="email" placeholder="Enter your email" value="<?php if (isset($email)) { echo $email; } ?>" disabled /><br><br><br>

            Password :
            <input type="password" name="password" placeholder="Enter your Password" value="<?php if (isset($password)) { echo $password; } ?>" disabled /><br><br><br>

            Confirm Password :
            <input type="password" name="confirm" placeholder="Enter your Confirm password" value="<?php if (isset($confirm)) { echo $confirm; } ?>" disabled/><br><br><br>


            <input type="submit" name="delete" value="delete"><br><br>

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

<?php
if (isset($_POST['delete'])) {
    $ID = $_SESSION['ID'];

    $deletesql = "DELETE FROM signup WHERE ID = $ID;";
    $delete = mysqli_query($connect, $deletesql);
    session_destroy();
    header("location:singup Dashbord.php");
}

mysqli_close($connect);
?>