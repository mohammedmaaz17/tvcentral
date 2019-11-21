<?php
            session_start();
            $user=$_SESSION['username'];
?>

<html>  
<title> TV CENTRAL </title>
      <head>  
        <link rel="stylesheet" href="head.css" />  
        <div id="header">
        <h1>TV CENTRAL </h1>        
            </div>
    </head> 
    <style>
        
body {
       background-color: gray;
}
        
        
    </style> 
    <body>  HELELELELLELELELELLELELELL  </body>
   
     <link rel="stylesheet" type="text/css" href="navbar.css">        
<div class="navbar">
  <a href="page2.php">HOME</a>
  <a href="allshow.php">ALL SHOWS</a>
  <a href="favs.php">Favourites</a>
  <a href="logout.php">Log Out</a>
    <a></a>
    <a></a>
    
    <a>  <?php 
            echo $user ;
            ?></a>
</div>
    
<?php 
     session_start();
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
 $result = mysqli_query($conn,"SELECT * FROM shows "); ?>
    
       <style>
           table{
               text-align: center;
               table-layout: fixed;
               width: 100%;
               border-collapse: collapse;
               border: 3px black;
               background-color: gray;
            
          
            
               
           }
    </style>

    <?php
while($row = mysqli_fetch_array($result)) {
    
    echo "<table border='10'>";
    echo "<tr>";
    echo "<td id='row'>" . $row['show_name'] . "</td>";
echo "<td id='row'>" . $row['genre'] . "</td>";
     echo "<td id='row'>" . $row['status'] . "</td>";
    echo"<td><a href='dup.php?id=". $row['show_id'] ."'>ADD TO FAV</a></td>";
    
echo "</tr>";

    }
      
$user=$_GET['id'];
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
$result=mysqli_query($conn,"INSERT INTO favourites (show_id) VALUES ('$user') ");
          
          
$conn->close();     
    

    ?>
</html>