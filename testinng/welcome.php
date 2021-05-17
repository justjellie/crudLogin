<?php
   include('session.php');
   // UID = 
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <meta http-equiv='refresh' content='3; URL=home.php'>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>