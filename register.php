<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","tv");
if(isset($_POST['register_btn']))
{
    if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }else{$username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
     $age=mysqli_real_escape_string($db,$_POST['age']);   
     if($password==$password2)
     {           //Create User
            //hash password before storing for security purposes
            $sql="INSERT INTO users(user_name,email_id,password,age) VALUES('$username','$email','$password','$age')";
            mysqli_query($db,$sql);  
            
            header("location:login.php");  //redirect home page
    }
    else
    {
      $_SESSION['message'] = "<span style='color:black',font-size: 40px;>The two Passwords do not match </span>";               
     }
      }
    
}
?>
<!DOCTYPE html>
<html>
 <head>  
        <link rel="stylesheet" href="head.css" />  
        <div id="header">
        <h1> TV CENTRAL </h1>        
            </div>
   
    </head>  
<body>
 <body>  HELELELELLELELELELLELELELL favsvsvsvs </body>    
<div class="header">
    <h1>SIGNUP</h1>
</div>
 <style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color: white;
color:black;

padding:10px;
font-size:20px;
cursor:pointer;
margin-bottom:15px; 
}    
   
    
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 15% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
    opacity: 0.9;
  background-color: black;
  text-decoration-color: azure;     
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background-color: honeydew;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: white;
  width: 100%;
  border: 0;
  padding: 15px;
  color: coral;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background-color: chocolate;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
background-image: url("loginbg.png");background-size: contain;background-repeat: no-repeat;background-size: 100%  100%;height: 753px;   
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
     #signupbox{
         
    
    left: 0px;
    height: 100px;
    top: 0;
    color: aliceblue;
    width: 100%;
    z-index: 200;
    font-family: monospace;
    font-size: 20px;
    text-align: center;

    
    text-align-last: center;
         
         
         
     }
     
     #error_msg{
         text-align: center;
         color: black;
     }

    
    
</style>   
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
 <div id="signupbox">
  <div class="login">
<div class="login-page"> 
<div class="form">       
<form method="post" action="register.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" ></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td>Confirm password : </td>
           <td><input type="password" name="password2" class="textInput"></td>
     </tr>
       <tr>
           <td>Age : </td>
           <td><input type="age" name="age" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
 
</table>
</form>
    </div>
      </div>
    </div>
    </div>
</body>
</html>
