<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['user'])){
    $user=$_POST['user'];
    $_SESSION['username']=$user;
}



$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 
     
 //$user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND user_name='$user'");
 $rows = mysqli_num_rows($query);
 if($rows == 1){
  $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$user;
     $query2 =  mysqli_query($conn, "SELECT user_id FROM users WHERE password='$pass' AND user_name='$user'");
     while($row = mysqli_fetch_array($query2)) {
     $_SESSION['uid'] = $row['user_id'];
     }
       header("location:page2.php");           // Redirecting to other page
 }
     if($rows > 1) {
        $error = "USER ALREADY EXISTS , CREATE AN ACCOUNT WITH ANOTHER USERNAME ";
         
     }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>