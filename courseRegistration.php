<?php
  include("config.php");
  ?>
<html>
<head>
<title> Register for Course </title>
</head>
<body>
  <?php
  // define variables
  $courseID = "";
  $studentUFID = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // get user input
    if(empty($_POST["CourseID"])){
      $courseIDError = "CourseID Required";
    }
    else{
      $courseID = test_input($_POST["CourseID"]);
    }

    if(empty($_POST["StudentUFID"])){
      $UFIDError = "UFID is required";
    }
    else{
      $studentUFID = test_input($_POST["StudentUFID"]);
    }
    }

  // sanitize the data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2> Fakeland Course Registration </h2>
  <form action = "courseInsert.php" method="post">
  courseID: <input type = "text" name = "courseID" />
  StudentUFID: <input type = "text" name = "StudentUFID" />
  <input type = "submit" />
  </form>

  <h2> Courses offered </h2>
    <?php
    // Find all courses
    $query = "SELECT * FROM courses";
    mysqli_query($db, $query)
    or die("Error, could not query the courses database:");

    // display all courses information
    $result = mysqli_query($db, $query);
    echo "All Courses " . '<br />';
    while($row = mysqli_fetch_array($result)) {
      echo $row['CourseID'] . ', ' . $row['CourseCode']. ', ' . $row['Subject']
      . ', ' . $row['SectionNum']. ', ' . $row['StudentsEnrolled']. ', ' .
      $row['MaxEnrolled']. ', ' . $row['ProfessorUFID']. ', ' . $row['CourseTime']. '<br />';
    }
    ?>
    <h2><a href = "index.php"> Go back to Homepage </a></h2>
</body>
</html>
