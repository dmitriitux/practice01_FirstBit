<?php


define('UNAME', 'SWAAROG');
define('PSWRD', '1234');
define('FULL_NAME', 'Maksimov Ivan Ivanovich');
$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;

$result = [];

$result['result'] = [];
$result['data'] = [];
$result['error'] = [];
$errorLogin = "Login is not right";
$errorPassword = "Password is not right";
$errorAll = "Fill in all the fields!";

if (is_string($username) && is_string($password)) {
  if ((UNAME == $username) && (PSWRD == $password)) {
    $result['result'] = "success";
    $result['data'] = FULL_NAME;
  } elseif (UNAME != $username) {
    $result['result'] = "error";
    $result['error'] = "errorLogin";
    $result['errorText'] = $errorLogin;
  } else {
    $result['result'] = "error";
    $result['error'] = "errorPassword";
    $result['errorText'] = $errorPassword;
  }
}

echo json_encode($result);

?>
