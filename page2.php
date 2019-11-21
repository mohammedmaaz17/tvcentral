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
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style>
body {
    background-image: url("pagebkg.jpg");background-repeat: repeat-y; background-size: 100%;
} 
        .bodytext{
            
            background-color: white;
            margin-top: 10.5%;
            font-family: fantasy;
            width: 100%;
            text-align: center;
            font-size: 50px;
            opacity: 0.7;
            padding-bottom: 20px;
            
            
        }
        h6{
            font-size: 30px;
        }
        #butt{ 
            padding-top:20px ;
            padding-right: 40px;
             padding-left: 40px;
            padding-bottom: 20px;
            text-align: center;
            align-content: center;
            background-color: red;
            color: aliceblue;
        }
/*
        .introtext{
            background-color: beige;
            color: black ;
            font-size: 20px;
            top: 30px;
            text-align: center;
            font-family: fantasy;
            
            
            
        }
*/
    </style> 
    <body>SKCDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD</body>
    <div class="bar">
<div class="navbar">
  <a href="page2.php">HOME</a>
  <a href="allshow.php">ALL SHOWS</a>
  <a href="favs.php">FAVOURITES</a>
  <a href="logout.php">LOG OUT</a> 
    <a></a>
    <a></a>
    
     <a><?php echo $user ; ?></a>
      
</div>
    </div> 
    <div class="bodytext">
    <h1>WELCOME TO TV CENTRAL!</h1>
    
<!--    <div class="introtext">-->
        <h6><p>Your one stop destination for all your favourite TV Shows and Explore new ones On The GO.</p>
            <p>Organise, Schedule and Manage your favourite TV shows right here.</p></h6>
     <h4><p><button id='butt' onclick="window.location.href='allshow.php'">LET'S GET STARTED</button></p></h4>
        
        
    </div>

    
    
    
    
   
</html>