<html><?php
$error='';//Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['browser'])){
 $error = "input a model ";
 }
 else  
     session_start();
 $user=$_POST['browser'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "bikes");
 $result = mysqli_query($conn,"SELECT * FROM upcoming where model='$user'");
    if(($result->num_rows)==0){
        echo"SORRY...<BR>NO BIKE MATCHING YOUR SEARCH.<BR>PLEASE GO BACK AND TRY AGAIN.";
    }
    else{ {
         echo "<table border='1'>
<tr>
<th>bike Id</th>
<th>brand name</th>
<th>model</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo"<tr>";
     echo "<td>" . $row['bike_id'] . "</td>";
    echo "<td>" . $row['brandname'] . "</td>";
echo "<td>" . $row['model'] . "</td>";


    }
    
    }}
  
   
 
$conn->close();     
    }
 
?>

</html>