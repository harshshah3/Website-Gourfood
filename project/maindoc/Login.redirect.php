<!DOCTYPE html>
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
<html >

<head>
<meta charset="UTF-8">
<title>Login Form</title>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style1.css">
</head>


<body>
  <div class="form" style="height: 500px;"> 
     <div class="tab-content">
      <div id="signup">   
      <br><br>
  <button type="submit" class="button button-block">Log in</button>
  <br><br>
     <form action="Login.php" method="post">         
 <div class="field-wrap">
         <label>   
       <span class="req"></span>
      </label>
      <input type="text"required autocomplete="off" name="username" placeholder="Enter Username" />
    </div>
   <div class="field-wrap">
     <label>
         <span class="req"></span>
    </label>  
     <input type="password"required autocomplete="off" name="password" placeholder="Enter Password" />
    </div>
          <button type="submit" class="button button-block"/>Welcome to GourFood</button>
          </form>
       </div>
    
    
        
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>

    
<script src="js/index.js">
</script>


</body>

</html>
