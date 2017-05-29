<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db, $sql);
      //$row = mysqli_fetch_array($result, $db);
      //$active = $row['active'];
      //$count =;
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if( mysqli_num_rows($result) > 0) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
      </style>
      </head>
            <body>
            <h1>Error</h1>
            </body>
</html>