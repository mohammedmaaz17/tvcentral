<?php
include("loginserv.php");
 session_start();
     $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "bikes");
 $result = mysqli_query($conn,"SELECT * FROM wishlists where username='$_SESSION[username]' ");
    if(($result->num_rows)==0){
        echo"SORRY...<BR>YOU DONT HAVE ANYTHING ON YOUR WISH LIST";
    }
    else{ {
         echo "<table border='1'>
<tr>
<th>user name</th>
<th>model</th>
<th>not good?!</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo"<tr>";
     echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['models'] . "</td>";
    echo "<td><a href='removewish.php?id=".$row['models']."'>remove from wishlists</a> </td>";


    }
    
    }}
  
   
?>







