<?php
//database connection details
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "landsale";

$connect  = mysqli_connect($servername,$username,$password,$databasename);

if($connect==false){
    echo("Error:can't connect to the database");
}

?>