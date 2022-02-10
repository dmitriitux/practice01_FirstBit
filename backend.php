<?php

// правильный логин и пароль
define('UNAME', 'SWAAROG');
define('PSWRD', '1234');

/**
 * Функция рендера ответа
 *
 * @param $output
 *
 * @return void
 */
function output($result = false, $messages = [], $data = [])
{
	header('Content-Type: application/json');
	$output_data = [
		'result'   => $result,
		'messages' => $messages,
		'data'     => $data,
	];
	echo json_encode($output_data);
	die();
}

// логин и пароль из post запроса
$username = (string) $_POST['username'] ?? '';
$password = (string) $_POST['password'] ?? '';


// проверяем на пустоту поля
if (empty($username))
{
	output(false, ['data' => ['password' => 'Fill in all the fields!']]);
}

// проверяем на пустоту поля
if (empty($password))
{
	output(false, ['data' => ['password' => 'Fill in all the fields!']]);
}

// пароль должен быть не меньше 4 символов
if (strlen($password) < 4)
{
	output(false, ['data' => ['password' => 'Minimum 4 characters in the password.']]);
}

// проверка на пользователя
if ((UNAME !== $username) || (PSWRD !== $password))
{
	output(false, ['list' => ['Login or password incorrect.']]);
}

output(true, ['list' => ['Auth success']], ['user' => 'Vasily Petrovich']);