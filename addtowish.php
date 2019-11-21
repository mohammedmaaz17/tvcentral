<?php 
 include("loginserv.php"); // Include loginserv for checking username and password
    session_start();
 $user=$_GET['id'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "bikes");
 $results = mysqli_query($conn,"SELECT * FROM wishlists where username='$_SESSION[username]' AND models='$user'");
if(($results->num_rows) > 0) {
 echo"already there.";
}
else{
    $result = mysqli_query($conn,"INSERT IGNORE INTO wishlists (models, username) VALUES (  '$user','$_SESSION[username]') ") or die("Can't Insert! ");
echo"successfully added to wishlist.";
}

?>


 
