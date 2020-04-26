<?php include('session.php');
?>

<html>
<head>
<title> Register a new user</title>
<h1><b>Register a new user!<b/><br /> </h1>
</head>
<body>

<!--To Insert to database page -->

<!--Back to Login button-->

<form action = "userForm.php" method = "post">
   <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
   <label>Password  :</label><input type = "text" name = "password" class = "box" /><br/><br />
   <label>Email  :</label><input type = "text" name = "email" class = "box" /><br/><br />
   <input type = "submit" value = " Submit "/><br />
</form>
<h2><a href = "login.php"> Existing user? Login </a></h2>
</body>
</html>
