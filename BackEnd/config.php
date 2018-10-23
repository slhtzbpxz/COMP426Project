<?php
@session_start();
@include('class.php'); 
@header('content-type:text/html;charset="utf-8"');

//connect to the database
$servername = "classroom.cs.unc.edu";
$username = "yuting";
$password = "96byt1223";
$dbname = "yutingdb";


// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //exit the script, if there is an error
    exit();
}
//
?>