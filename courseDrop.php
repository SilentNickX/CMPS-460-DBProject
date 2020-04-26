<?php
  include("config.php");
  ?>
<html>
<link rel="stylesheet" type="text/css" href = "main.css">
<head>
<title>Drop a course</title>
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
    <table>
      <thead>
        <tr>
          <th scope="col"><h4>CourseID</h4></th>
          <th scope="col"><h4>CourseCode</h4></th>
          <th scope="col"><h4>Subject</h4></th>
          <th scope="col"><h4>SectionNum</h4></th>
          <th scope="col"><h4>StudentsEnrolled</h4></th>
          <th scope="col"><h4>MaxEnrolled</h4></th>
          <th scope="col"><h4>ProfessorUFID</h4></th>
          <th scope="col"><h4>CourseTime</h4></th>
        </tr>
      </thead>
      <tbody>
        <?php
    while($row = mysqli_fetch_array($result)) {
      echo "
      <tr>
                <td>{$row['CourseID']}</td>
                <td>{$row['CourseID']}</td>
                <td>{$row['Subject']}</td>
                <td>{$row['SectionNum']}</td>
                <td>{$row['StudentsEnrolled']}</td>
                <td>{$row['MaxEnrolled']}</td>
                <td>{$row['ProfessorUFID']}</td>
                <td>{$row['CourseTime']}</td>
                </tr>";
              }
              ?>
              </tbody>
            </table>
    <button><h2><a href = "index.php"> Go back to Homepage </a></h2></button>
</body>
</html>
