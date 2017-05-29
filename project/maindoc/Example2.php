<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql1 = 'SELECT review FROM review LIMIT 3 OFFSET 2';
   mysql_select_db('example');
   $retval = mysql_query( $sql1, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "Review :{$row[0]}  <br> ".
           "--------------------------------<br>";
   }
   
   mysql_free_result($retval);
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>