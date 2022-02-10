<?php


define('UNAME', 'SWAAROG');
define('PSWRD', '1234');
define('FULL_NAME', 'Maksimov Ivan Ivanovich');
$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;

$result = [];
$result['result'] = [];
$result['data'] = [];
$result['errors'] = [];

if (is_string($username) && is_string($password)) {
  if ((UNAME == $username) && (PSWRD == $password)) {
    $result['result'] = "success";
    echo json_encode($result);
  } elseif (UNAME != $username) {
    $result['result'] = "error";
    $result['error'] = "Login is not right";
    echo json_encode($result);
  } elseif (strlen($password) < 4) {
    $result['result'] = "error";
    $result['error'] = "Minimum 4 characters in the password!";
    echo json_encode($result);
  } else {
    $result['result'] = "error";
    $result['error'] = "Password is not right!";
    echo json_encode($result);
  }
} else {
    $result['result'] = "error";
    $result['error'] = "Fill in all the fields!";
    echo json_encode($result);
}


?>
