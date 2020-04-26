<?php include('session.php');
?>
<html>
<link rel="stylesheet" type="text/css" href = "main.css">
<head>
<title> University of Fakeland Homepage</title>
<h1><b>University of Fakeland<b/><br /> </h1>
</head>
<body>
  <h1> Welcome! <?php echo $login_session; ?> </h1>

<!--To Insert to database page -->
<button><h2><a href="courseRegistration.php"> Register for a course</a></h2></button>

<!-- To Drop a course page -->
<button><h2><a href = "courseDrop.php"> Drop a course </a></h2></button>

<!--To View Grades -->
<button><h2><a href = "studentGrades.php"> View Grades </a></h2></button>

<br>
<!--Logout button-->
<button><a href = "logout.php"> Logout </a></button>
</body>
</html>
