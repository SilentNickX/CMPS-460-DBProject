<?php
  include ('session.php');
  ?>
  <html>
  <head>
    <title> WELCOME </title>
  </head>

  <body>
    <h1> WELCOME
       <?php echo $login_session; ?>
    </h1>
    <h2> <a href = "logout.php"> SIGN OUT </a></h2>
  </body>
  </html>
