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
        <h1>TV CENTRAL </h1>        
            </div>
    </head> 
    <body>
    <style>
        
        
      .footer {
          position: fixed;
        background-color: red;
          left: 0;
          bottom: 0;
          width: 100%;
          text-align: right ;
          font-family: sans-serif;
          color: aliceblue;
        }    
        .foothead{
              left: 0;
          bottom: 0;
            text-align: left;
            color: aliceblue;
             position: fixed;
        }
        
body {
       background-color: black;
        background-image: url("pagebg.jpg");background-repeat: repeat-y; background-size: 100%;
} 
        table{
            
            background-color: black;      
            color: white;
            border-color: black;

            
        }
        #row
        {
            font-family: cursive;
            color: red;
            text-align: center;
            font-size: 18px;
          padding-top: 40px;
        
            border: 20px;
         border-color: aliceblue;
        
        }
        
        
   .box
   {
    
   width: 220px;
    background-color:black;
    border:0px solid #ccc;
    border-radius:0px;
       float: right;
       color: red;
       font-family: cursive;
    
        }  h3{
            
            color: red;
            
        }

  a { 
				font-size:25px; 
				text-decoration:none; 
			} 
			p { 
				font-size:25px; 
			} 
        
        
    </style> 
      HELELELELLELELELELLELELELL  
   
     <link rel="stylesheet" type="text/css" href="navbar.css">        
<div class="bar">
<div class="navbar">
  <a href="page2.php">HOME</a>
  <a href="allshow.php">ALL SHOWS</a>
  <a href="favs.php">FAVOURITES</a>
  <a href="logout.php">LOG OUT</a>
    <a></a>
    <a></a>
    
    <a>  <?php 
            echo $user ;
            ?></a>
</div>
    </div>
    
<?php 
    include("loginserv.php");
        $message = "";
     
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "tv");
 $result = mysqli_query($conn,"SELECT * FROM shows,ratings where shows.show_id=ratings.show_id "); ?>
    
         <table border='1'>
        
<tr>
    <th id="row"></th>
    <th id="row">Name</th>
    <th id="row">Description</th>
    <th id="row">Genre</th>
    <th id="row">Rating</th>
    <th id="row">Status</th>

</tr>
    <?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>"; ?> <img src=" <?php echo $row["img"]; ?>" height="150" width="150"> <?php echo "</td>";
    echo "<td id='row'>" . $row['show_name'] . "</td>";
    echo "<td id='row'>" . $row['description'] . "</td>";
echo "<td id='row'>" . $row['genre'] . "</td>";
    echo "<td id='row'>" . $row['rating'] . "</td>";
     echo "<td id='row'>" . $row['status'] . "</td>";
     
echo "</tr>";

    }
      
    if(isset($_POST["submit"]))
          {
           $for_query = '';
           if(!empty($_POST["favourites"]))
           {
            foreach($_POST["favourites"] as $favourites)
            {
             $for_query = $favourites;
             $fav = mysqli_query($conn,"SELECT * FROM favourites where user_id='$uid' AND show_id='$for_query'"); 
                if(($fav->num_rows) > 0){
                    $message= "ALREADY THERE";
                }
            
            else {
                $query = "INSERT INTO favourites (show_id,user_id) VALUES ('$for_query','$uid')";
                
            }
    
            
            if(mysqli_query($conn, $query))
            {
               $message="Added To Favourites";
            }
            }
           }
           else
           {
            $message = "Please Select atleast one show to add into favourites";
           }
          }
        else{
                $message="Add selected shows to favorites";
        }
    
  
   
 
$conn->close();     
    
 
?> 
   
    <div class="container box">   
 <form method="post">
     <h3>ADD TO FAVOURITES </h3>
     <p><br></p>
     <p><br></p>
   
           <p><input type="checkbox" name="favourites[]" value="1" />GAME OF THRONES</p>
    <br>
        <br> 
      <br><br><br>
           <p><input type="checkbox" name="favourites[] "value="2" />FLASH</p>
     <br>
        <br> 
         <br><br><br>
           <p><input type="checkbox" name="favourites[]" value="3" />ARROW</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="4" />DRAGONBALL SUPER</p>
     <br>
        <br> 
        <br><br>
           <p><input type="checkbox" name="favourites[]" value="5" />STRANGER THINGS</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="6" />LEGENDS OF TOMORROW</p>
     <br>
        <br> <br><br>
  
     <p><input type="checkbox" name="favourites[]" value="7" />LUCIFER</p>
     <br>
        <br>  <br><br>
     <p><input type="checkbox" name="favourites[]" value="8" />SUPERGIRL</p>
     <br>
        <br> <br><br><br>
        <p><input type="checkbox" name="favourites[]" value="9" />THE WALKING DEAD</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="10" />SHERLOCK</p>
     <br>
        <br> 
        <br><br>
     <p><input type="checkbox" name="favourites[]" value="11" />BIG BANG THEORY</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="12" />DAREDEVIL</p>
     <br>
        <br> 
        <br><br><br>
    
     <p><input type="checkbox" name="favourites[]" value="13" />AGENTS OF SHIELD</p>
     <br>
        <br> 
        <br><br>
     <p><input type="checkbox" name="favourites[]" value="14" />GOTHAM</p>
     <br>
        <br> 
        <br><br><br>
    
     <p><input type="checkbox" name="favourites[]" value="15" />SUPERNATURAL</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="16" />MR.ROBOT</p>
     <br>
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="17" />THE 100</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="18" />PRISON BREAK</p>
     <br>
        <br> 
        <br><br>
     <p><input type="checkbox" name="favourites[]" value="19" />VIKINGS</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="20" />TEEN WOLF</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="21" />BLINDSPOT</p>
     <br>
    
        
   <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="22" />SUITS</p>
     <br>
        <br> 
        <br><br>
    
     <p><input type="checkbox" name="favourites[]" value="23" />WESTWORLD</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="24" />THE ORIGINALS</p>
     
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="25" />VAMPIRE DIARIES</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="26" />JESSICA JONES</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="27" />IRON FIST</p>
     <br>
        <br> 
        <br><br><br> 
     <p><input type="checkbox" name="favourites[]" value="28" />LUKE CAGE</p>
     <br>
        
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="29" />QUANTICO</p>
     <br>
        <br> <br><br>
     <p><input type="checkbox" name="favourites[]" value="30" />DEFENDERS</p>
     <br>
         
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="31" />INHUMANS</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="32" />NARUTO</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="33" />BLACKLIST</p>
     <br>
        <br> 
        <br><br>
     <p><input type="checkbox" name="favourites[]" value="34" />ORANGE IS THE NEW BLACK</p>
     <br>
    
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="35" />LIMITLESS</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="36" />HOUSE OF CARDS</p>
     <br>
        <br> 
        <br><br>
     <p><input type="checkbox" name="favourites[]" value="37" />BORUTO</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="38" />SHOOTER</p>
     <br>
        <br> 
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="39" />MENTALIST</p>
     <br>
        <br> 
        <br><br><br> 
       <p><input type="checkbox" name="favourites[]" value="40" />CONSTANTINE</p>
     <br>
        <br> <br><br>
     <p><input type="checkbox" name="favourites[]" value="41" />PREACHER</p>
     <br>
        <br> <br><br>
     <p><input type="checkbox" name="favourites[]" value="42" />POKEMON</p>
     <br>
        <br> 
     <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="43" />BREAKING BAD</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="44" />ATTACK ON TITAN</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="45" />BLEACH</p>
     <br>
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="46" />TOKYO GHOUL</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="47" />RIVERDALE</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="48" />TRUE DETECTIVE</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="49" />DRAGONBALL Z</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="50" />DEATH NOTE</p>
     <br>
        <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="51" />AGENT CARTER</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="52" />CODE GEASS</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="53" />AKAME GA KILL</p>
     <br>
        <br> <br><br>
     <p><input type="checkbox" name="favourites[]" value="54" />ONE PIECE</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="55" />PARASYTE</p>
     <br>
        <br> <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="56" />FULL METAL ALCHEMIST</p>
     <br><br><br>
     <p><input type="checkbox" name="favourites[]" value="57" />SWORD ART ONLINE</p>
     <br>
        <br> <br><br>
     <p><input type="checkbox" name="favourites[]" value="58" />ONE PUNCH MAN</p>
     <br>
        <br><br><br><br>
     <p><input type="checkbox" name="favourites[]" value="59" />YOUNG SHEDON</p>
     <br>
        <br> <br><br><br>
     
     <p><input type="checkbox" name="favourites[]" value="60" />FRIENDS</p>
     <br>
        <br> 
        <br><br><br><br>
        
            </div> 
           <div class="footer">
    <p><input type="submit" name="submit" value="Submit" /></p>
       <div class="foothead">
       <p>&nbsp;&nbsp;<?php echo $message;?></p>
			<footer>
        <small>&copy; Copyright 2019, All Rights Reserved</small>
</footer> </div>
       </div>
    </form>
    </body>
    </table>    
    
</html>