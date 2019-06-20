<?php

include('session.php');

?>

<html">

<head>

<title>Welcome To Our Site</title>

</head>

<body>

<h1>Welcome To Our Site <?php echo $login_session; ?></h1>

<h2><a href = "logout.php">Sign Out</a></h2>

</body>

</html>