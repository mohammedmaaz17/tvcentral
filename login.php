
<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" type="text/css" href="login.css">
        <title> TV CENTRAL </title>
        <link rel="stylesheet" href="head.css" />  
        <div id="header">
        <h1> TV CENTRAL </h1>        
            </div>
    </head>  
    <?php
include("loginserv.php");// Include loginserv for checking username and password
?>
<meta charset="UTF-8">
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
background-color: black;
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
  background-color: black;
    opacity: 0.8;
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

    
    
</style>
<body>
<div class="login">
<div class="login-page"> 
<div class="form">    
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="LOGIN" name="submit">
 <button type="submit"><a href="register.php">SIGNUP</a></button>   
    
<!-- Error Message -->
<span style="color:#FFF;text-align:center;"><?php echo $error;  ?> </span>
    </form>
    </div></div></div>
</body>
</html>
