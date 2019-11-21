<?php

$connect = mysqli_connect("localhost", "root", "", "tv");

?>
<html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
         
          <form method="post">
           <p><input type="checkbox" name="favourites[]" value="1" /> GAME OF THRONES</p>
              <p><br></p>
              <p><br></p>
           <p><input type="checkbox" name="favourites[] "value="2" /> FLASH </p>
           <p><input type="checkbox" name="favourites[]" value="3" /> ARROW</p>
           <p><input type="checkbox" name="favourites[]" value="4" /> DRAGONBALL SUPER</p>
           <p><input type="checkbox" name="favourites[]" value="5" /> STRANGER THINGS</p>
           <p><input type="submit" name="submit" class="btn btn-info" value="Submit" /></p>
          </form>
          <?php
            
          if(isset($_POST["submit"]))
          {
           $for_query = '';
           if(!empty($_POST["favourites"]))
           {
            foreach($_POST["favourites"] as $favourites)
            {
             $for_query = $favourites;
            $query = "INSERT INTO favourites (show_id) VALUES ('$for_query')";
            
    
            
            if(mysqli_query($connect, $query))
            {
               
            }
            }
           }
           else
           {
            echo "<label class='text-danger'>* Please Select atleast one show to add into favourites</label>";
           }
          }
          ?>
     <br />
         </div>  
      </body>  
 </html>