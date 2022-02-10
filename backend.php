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
		'data'     => $data,
		'messages' => $messages,
	];
	echo json_encode($output_data);
	die();
}

// логин и пароль из post запроса
$username = (string) $_POST['username'] ?? '';
$password = (string) $_POST['password'] ?? '';

// массив для отдачи для ответа


// проверяем на пустоту поля
if (empty($username) || empty($password))
{
	output(false, ['Fill in all the fields!']);
}

// пароль должен быть не меньше 4 символов
if (strlen($password) < 4)
{
	output(false, ['Minimum 4 characters in the password.']);
}

// проверка на пользователя
if ((UNAME !== $username) || (PSWRD !== $password))
{
	output(false, ['Login or password incorrect.']);
}

output(true, ['You are logged in as Vasily Petrovich']);