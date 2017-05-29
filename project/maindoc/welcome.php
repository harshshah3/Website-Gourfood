<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; 
      header("location: reviews.php");?></h1>
      <h2><a href = "Logout_Final.php">Sign Out</a></h2>
   </body>
   
</html> 