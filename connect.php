<?php
# variables, $ = var
$user = 'root'; # default username
$pass = ''; # password blank,
$db = 'testdb'; # name of database

$db = new mysqli('localhost', $user, $pass, $db) or die("error, unable to connect"); # create connection, else, shutdown

 ?>

<html>
<head> </head>
<body>
  <h1> PHP Connected to MYSQL! </h1>
  <?php
  //querying testtable
  $query = "SELECT * FROM testtable ";
  mysqli_query($db, $query)
  or die ("error querying testtable from database testdb.");

  // display the results
  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);

  while ($row = mysqli_fetch_array($result)) {
   echo $row['Lname'] . ' ' . $row['Fname'] . ': ' . $row['BirthYear'] . ' ' . $row['BirthMonth'] .'<br />';
  }

  // close the connection
  mysqli_close($db);
  ?>
  </body>
  </html>
