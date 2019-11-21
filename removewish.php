<?php 
 include("loginserv.php"); // Include loginserv for checking username and password
    session_start();
 $user=$_GET['id'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
$x=$_POST['sub'];
$result = mysqli_query($conn,"DELETE FROM favourites WHERE show_id='$x'");
header("Location: favs.php");
?>


 
