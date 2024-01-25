<?php
include 'connect.php';
session_start();
?>

<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql2 = "SELECT * FROM payment WHERE id = '$id';";
    $result3 = mysqli_query($connect, $sql2);

    if ($result3) {
        $row = mysqli_fetch_assoc($result3);

        $id = $row['id'];
        $amount = $row['amount'];
        $type = $row['type'];
        $number= $row['number'];
        $name = $row['name'];
        $date= $row['date'];
        $cvv= $row['cvv'];
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

    <!--Slide Show Start-->
    <fieldset class="fie2"style="width: 700px;px;"align="center" >
        <legend align="center">Payment Details</legend></legend></legend>

        <form action="#" method="POST">
        
        
        Amount Type:LKR :
        <input type="text" name="amount" placeholder="Enter your amount" value="<?php if (isset($amount)) { echo $amount; } ?>" disabled  /><br><br>

        Card Type :
        <input type="text" name="type" placeholder="Enter your card type" value="<?php if (isset($type)) { echo $type; } ?>" disabled /><br><br>

        Card Number:
        <input type="text" name="number" placeholder="Enter your card number"value="<?php if (isset($number)) { echo $number; } ?>" disabled  /><br><br>

        Name on Card :
        <input type="text" name="name" placeholder="Enter your name on card" value="<?php if (isset($name)) { echo $name; } ?>" disabled /><br><br>

        Expriration :
        <input type="text" name="date" placeholder="Enter your card Expriration "value="<?php if (isset($date)) { echo $date; } ?>" disabled  /><br><br>

        CVV :
        <input type="text" name="cvv" placeholder="Enter your card cvv " value="<?php if (isset($cvv)) { echo $cvv; } ?>" disabled /><br><br>

        <input type="submit" name="delete" value="delete"><br><br>

        
        <p> I here by aythorize the debit to my visa/master account in favor of Green Land (Pvt) Ltd.</p><br><br>

</form>
        </fieldset>
        </body>
    <!--Slide Show End-->

    <br>
    <br>
    
    
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

    $deletesql = "DELETE FROM payment WHERE id = $id;";
    $delete = mysqli_query($connect, $deletesql);
    session_destroy();
    header("location:paymentDashbord.php");
}

mysqli_close($connect);
?>