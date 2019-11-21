<?php
$user=$_GET['id'];
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
$result=mysqli_query($conn,"INSERT INTO favourites (show_id) VALUES ('$user') ");
          
          
$conn->close();     
    
 
?> 