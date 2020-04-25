<?php include('session.php');
?>

<html>
<head>
<title> University of Fakeland Homepage</title>
<h1><b>University of Fakeland<b/><br /> </h1>
</head>
<body>
  <h1> WELCOME <?php echo $login_session; ?> </h1>
  <?php
  // Query the professors table
  $query = "SELECT * FROM professors";
  mysqli_query($db, $query)
  or die("Error, could not query professors table");

  // display the results
  $result = mysqli_query($db, $query);
  while($row = mysqli_fetch_array($result)) {
    echo $row['ProfessorUFID'] . ', ' . $row['LName']. ', ' . $row['FName']. ', ' .
    $row['Salary']. ', ' . $row['YearHired']. ', ' . $row['Phone']. ', ' . $row['Email']. '<br />';
  }


   ?>
   <h2> Professors Below </h2>
     <<?php
     // Query 2, select UFID
     $query = "SELECT LName FROM professors";
     mysqli_query($db, $query)
     or die("Error, could not query professors table");

     // display the results
     $result = mysqli_query($db, $query);
     echo "Professor Names Below " . '<br />';
     while($row = mysqli_fetch_array($result)) {
       echo $row['LName'] . '<br />';
     }

     // close the connection to the DB
     mysqli_close($db);
      ?>


<br>
<br>
<br>
<!--To Insert to database page -->
<button><a href="courseRegistration.php"> Register for a course</a></button>
<h2><a href = "courseDelete.php"> Drop a course </a></h2>

<!--Logout button-->
<h2><a href = "logout.php"> Logout </a></h2>
</body>
</html>
