<?php
  include("config.php");
  $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  if (!$con){
    die("Could not connect to database" . mysqli_error($con));
  }

  mysqli_select_db($con, DB_DATABASE);
  $sql = "INSERT INTO coursestaken (CourseID, StudentUFID)
  VALUES ('$_POST[courseID]','$_POST[StudentUFID]')";

  if(!mysqli_query($con, $sql)){
    die("Error, could not query the database: <br /> " . mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($con)
  ?>
