<?php

include("config.php");

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

// username and password sent from form
$error = "";

$username = mysqli_real_escape_string($db,$_POST['username']);

$password = mysqli_real_escape_string($db,$_POST['password']);

$abc = "SELECT id FROM login WHERE username = '$username' and passcode = '$password'";

$result = mysqli_query($db,$abc);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$act = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row

if($count == 1) {

session_register("username");

$_SESSION['login_user'] = $username;

header("location: welcome.php");

}

else

{

$error = "Your Login Name or Password is invalid";

}

}

?>

<html>

<head>

<title>Login Page</title>

<style type = "text/css">

body {

font-family:Arial, Calibri,Batang;

font-size:16px;

}

label {

font-weight:bold;

width:120px;

font-size:16px;       }



.a{

border:#666666 solid 2px;

}

</style>

</head>

<body bgcolor = "#FFFFFF">

<div align = "center">

<div style = "width:300px; border: solid 1px #333333; " align = "left">

<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

<div style = "margin:30px">

<form action = "" method = "post">

<label>UserName  :</label><input type = "text" name = "username" class = "a"/><br /><br />

<label>Password  :</label><input type = "password" name = "password" class = "a" /><br/><br />

<input type = "submit" value = " Submit "/><br />

</form>

<div style = "font-size:11px; color:#cc2200; margin-top:10px">

</div

</div>   </div>

</body>

</html>
