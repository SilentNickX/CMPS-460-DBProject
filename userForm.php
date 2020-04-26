<?php
  include("config.php");
  $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  if (!$con){
    die("Could not connect to database" . mysqli_error($con));
  }

  mysqli_select_db($con, DB_DATABASE);
  $sql = "INSERT INTO accounts (username, password, email)
  VALUES ('$_POST[username]','$_POST[password]','$_POST[email]')";

  if(!mysqli_query($con, $sql)){
    die("Error, could not query the database: <br /> " . mysqli_error($con));
  }
  echo "You have been registered!";
  header("Location: login.php");
  mysqli_close($con)
  ?>
