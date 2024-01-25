<?php
include 'connect.php';
session_start();
?>

<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql2 = "SELECT * FROM contact WHERE id = '$id';";
    $result3 = mysqli_query($connect, $sql2);

    if ($result3) {
        $row = mysqli_fetch_assoc($result3);

        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $message = $row['message'];
        
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWW.greenland.com</title>
    <link rel="stylesheet" href="style.css">
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
<head><title> </title>

    <link rel="stylesheet" href="style.css";>

</head>
<body>
 
 <textarea readonly="readonly"rows="10" cols="30" >
 HEAD OFFICE 
 Green land(Pvt)Ltd,
 N0 250,
 Galle Road,
 Colombo 03,
 Sri lanka,
</textarea>
<br>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9026077627873!2d79.9564151!3d6.902249600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25702b7c0bf3f%3A0x67910ccbe606676b!2sGreen%20Lands%20Development%20(pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1697031242807!5m2!1sen!2slk" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

<fieldset style="width: 500px; background-color: #f2f2f2;">
    <legend style="text-align:center"><b>Contact Details</b></legend>
    <form action="#" method="POST">

        Name :
        <input type="text" name="name" placeholder="Enter your name" value="<?php if (isset($name)) { echo $name; } ?>" disabled /><br><br>

        Phone Number :
        <input type="text" name="phone" placeholder="Enter your phoneNumber" value="<?php if (isset($phone)) { echo $phone; } ?>" disabled /><br><br>

        Email :
        <input type="text" name="email" placeholder="Enter your Email" value="<?php if (isset($email)) { echo $email; } ?>" disabled /><br><br>

        Message :
        <input type="text" name="message" placeholder="Enter your message" value="<?php if (isset($message)) { echo $message; } ?>" disabled /><br><br>

        <button type="submit" name="delete" class="formbold-btn formbold-btn-primary formbold-btn-lg">Delete</button>

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
    $id = $_SESSION['id'];

    $deletesql = "DELETE FROM contact WHERE id = $id;";
    $delete = mysqli_query($connect, $deletesql);
    session_destroy();
    header("location:contactusdashboard.php");
}

mysqli_close($connect);
?>
