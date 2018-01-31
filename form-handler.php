<?php
$max_filesize = 2048;//kB
$allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
$allowed_extention = ['jpg', 'jpeg', 'png'];
//ini_set('upload_max_filesize', '8M');

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

// validation of input fields

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
	//open file for reading
	$fh = fopen('date/request.txt', 'a');
	$date = date('F d, Y, H:i');
	$date = $date."\n";
	//$date =$date.' \n';
	$name = 'Имя:'.$name."\n";
	$email = 'Email:'.$email."\n";
	$message = $message."\n";
	//write info to the file
	fwrite($fh, $date.$name.$email.$message);

	fclose($fh);
	//write the elememts of global array $_FILES in variables
	$image = $_FILES['image'];
	$tmp_name = $image['tmp_name'];
	$original_name = $image['name'];
	//count of added files
	$files_amount = count($original_name);

	for($i = 0; $i < $files_amount; $i++){
	
	//if the file exist
	if($original_name[$i]){
		//position of last entry of dot
		$dotpos = strripos($original_name[$i], '.');
		//extension of added files
		$extension = substr($original_name[$i], $dotpos+1);

		//validation of filesize
		if(filesize($tmp_name[$i]) > ($max_filesize * 1024))
		{
			die('Сори,файл слишком большой');
		}
		//type validation
		elseif (!in_array($image['type'][$i], $allowed_types) OR !in_array($extension, $allowed_extention)) {
			die('Используй файл с нужным расширением');
		}
		else{
			$dir = 'uploads';
			$subdir = mt_rand(0, 10);
			//path to new folder with random name
			$path = $dir.'/'.$subdir;
			//if the file is not a directory
			if(!is_dir($path)){
				mkdir($path);
			}
	

			do{
				$name = random_string(8);
				$filename = $name.'.'.$extension;
				$is_exist = file_exists($path.'/'.$filename);
			}while($is_exist);
			//open file for writing link to image
			$fh = fopen('date/request.txt', 'a');
			$link = 'Файл#'.($i+1).' : ';
			$link .= 'http://localhost/dashboard/test/workspase/homework/php_integration/'.$path.'/'.$filename;
			$link .="\n";
			$link .='===================='."\n";
			fwrite($fh, $link);

			fclose($fh);
	
	$result = move_uploaded_file($tmp_name[$i], $path.'/'.$filename);
			
			if(!$result){
				die('Произошла ошибка');
			}
	
	echo '<pre>';
	var_dump($image);
	echo '</pre>';
	
		}
	}
}
}
//function generate random string
function random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';