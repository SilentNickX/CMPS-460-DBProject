<?php include('session.php');
?>

<html>
<link rel="stylesheet" type="text/css" href = "main.css">
<head>
<title> Grades for <?php echo $login_session; ?> </title>
<h1><b>Grades for <?php echo $login_session; ?> <b/><br /> </h1>
</head>
<body>
  <!-- Show student grades -->
  <?php
  // Find all courses
  $query = "SELECT * FROM courses";
  mysqli_query($db, $query)
  or die("Error, could not query the coursesTaken database:");

  // display all courses information
  $result = mysqli_query($db, $query);
  echo "All Courses " . '<br />';
  ?>

<br>
<!--Logout button-->
<button><a href = "logout.php"> Back to Homepage </a></button>
</body>
</html>
