<?php


define('UNAME', 'SWAAROG');
define('PSWRD', '1234');
$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;

if (is_string($username) && is_string($password)) {
  if ((UNAME == $username) && (PSWRD == $password)) {
    echo 'You are logged in as Vasily Petrovich';
  } elseif (UNAME != $username) {
    echo 'Login is not right!';
    $errorUser = 'Authorisation Error';
  } elseif (strlen($password) < 4) {
	 echo 'Minimum 4 characters in the password.';
  } else {
    echo 'Password is not right!';
    $errorPsw = 'Authorisation Error';
  }
} else {
  echo 'Fill in all the fields!';
}


?>
