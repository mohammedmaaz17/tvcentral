<?php
            session_start();
            $user=$_SESSION['username'];
            $uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html>
<title> TV CENTRAL </title>
      <head>  
        <link rel="stylesheet" href="head.css" />  
        <div id="header">
        <h1> TV CENTRAL </h1>        
            </div>
    </head> 
    <style>
body {
       margin: 0;
    padding: 0;
    background-color: black;
} 
        
      table{
            width: 100%;
            font-family: cursive;
            color: darkred;
            background-color: black;
          margin-top:10.4%;
            color: white;
            border-color: black;
          text-align: center;
          table-layout: fixed;
        
            
        }
        #row
        {
            text-align: center;
            color: red;
        
            border: 20px;
            font-size: 18px;
         border-color: aliceblue;
            font-weight:900;
            
        }
         .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
    padding: 90px 0px;
    position: absolute;
    left: 0px;
    width: 100%;
    margin: 0;
    
}

/* Links inside the navbar */
.navbar a {
    text-align: center;
    font-family:monospace;
  font-size: 30px;
  color: white;
  text-align: 100px;
align-content: center;
  padding: 25px 50px;
  text-decoration: none;
    
}


/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
#header{
    background: black;
    position: absolute;
    left: 0px;
    height: 100px;
    top: 0;
    color: aliceblue;
    width: 100%;
    z-index: 200;
    font-family: monospace;
    font-size: 30px;
    text-align: center;

    
    text-align-last: center;
    
}
        #emptyfav{
            
            color: white;
            margin-top: 30%;
            text-align: center;
            border: 10px;
            border-color: red;
            font-family: monospace;
            font-size: 30px;
        }
        
        
        
        
        
    </style> 
     <body>  HELELELELLELELELELLELELELL favsvsvsvs </body>
     <link rel="stylesheet" type="text/css" href="navbar.css">    
    <div class="bar">
<div class="navbar">
  <a href="page2.php">HOME</a>
  <a href="allshow.php">ALL SHOWS</a>
  <a href="favs.php">FAVOURITES</a>
  <a href="logout.php">LOG OUT</a>
    <a></a>
    <a></a>
    <a><?php echo $user;?></a> 
    </div>
    </div>
    <?php 
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
 $result = mysqli_query($conn,"CALL updateFavourites('$uid')"); ?>
    <?php

    if(($result->num_rows)==0) {
    echo "<ul id='emptyfav'>Your Favourites list is empty! Add your favourite shows from All Shows</ul>";
    }
    else
    {
  ?>  
    
        <table border='1'>
<tr>
 <th id="row"></th>
    <th id="row">Name</th>
    <th id="row">Airday</th>
    <th id="row">Channel</th>

</tr>
            
   
            <form action="removewish.php" method="post">
    <?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
 echo "<td>"; ?> <img src=" <?php echo $row["img"]; ?>" height="200" width="200"> <?php echo "</td>";
    echo "<td id='row'>" . $row['show_name'] . "</td>";
echo "<td id='row'>" . $row['airday'] . "</td>";
     echo "<td id='row'>" . $row['airchannel'] . "</td>";
    $x=$row['show_id'];
    echo "<td id='row'>Remove<input type = 'submit' value='$x' name='sub'/></td>";
echo "</tr>";

    }
    }
   
    mysqli_close($conn);
    ?>
    
    </form>
    </table>
</html>