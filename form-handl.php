<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);



if(empty($name) OR empty($email) OR empty($message))
{
	die('Пожалуйста заполните все поля!');
}
elseif(mb_strlen($name) > 250 OR mb_strlen($email) > 250 )
{
	die('Слишком длинное имя или имэил');
}
elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
	die('введите правильный емэил');
}
else{
	$fh = fopen('date/request.txt', 'a');
	$date = date('F d, Y, H:i');
	$date = $date."\n";
	//$date =$date.' \n';
	$name = 'Имя:'.$name."\n";
	$email = 'Email:'.$email."\n";
	$message = $message."\n".'===================';
	$message =$message."\n";


	

	fwrite($fh, $date.$name.$email.$message);
	fclose($fh);
}
echo '<pre>';
var_dump($_POST);
echo '</pre>';