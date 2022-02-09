<?php


define('UNAME', 'SWAAROG');
define('PSWRD', '1234');
define('FULL_NAME', 'Maksimov Ivan Ivanovich');
$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;

$result = [];
$result['result'] = success;
$result['data'] = FULL_NAME;
$result['errors'] = [];

if (is_string($username) && is_string($password)) {
  if ((UNAME == $username) && (PSWRD == $password)) {
    echo json_encode($result);
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
