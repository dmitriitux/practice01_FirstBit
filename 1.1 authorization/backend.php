<?php


define('UNAME', 'SWAAROG');
define('PSWRD', '1234');
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ((!empty($username)) && (!empty($password))) {
  if ((UNAME == $username) && (PSWRD == $password)) {
    echo 'You are logged in as Vasily Petrovich';
  } elseif (UNAME != $username) {
    echo 'Login is not right!';
    $userError = 'Authorisation Error';
  } else {
    echo 'Password is not right!';
    $passwordError = 'Authorisation Error';
  }
}


?>
