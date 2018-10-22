<?php
function logFile($textLog) {
    $file = './logFile.txt';
    $text = date('Y-m-d H:i:s');
    $text .= " " . $textLog;                      
    $text .= PHP_EOL;
    $fOpen = fopen($file, 'a+');
    if ( $fOpen ){
        fwrite($fOpen, $text);
        fclose($fOpen);
    } else {
        echo 'Ошибка при отурытии файла.';
    }
}
function clean($value = "") {
	$value = trim($value);                  
	$value = stripslashes($value);          
	$value = strip_tags($value);            
	$value = htmlspecialchars($value);      
	return $value;
}
function check_length($value = "", $min, $max) {
	$result = (mb_strlen($value, 'UTF-8') < $min || mb_strlen($value, 'UTF-8') > $max);
	return !$result;
}
function check_pass($pass, $pass2){
	return $pass == $pass2;
}

$bd_email = ['alex2018@mail.ru', 'olga095@gmail.com', 'vladimir93@gmail.com'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$e_mail = $_POST['email'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	$name = clean($name);
	$surname = clean($surname);
	$e_mail = clean($e_mail);
	$pass = clean($pass);
	$pass2 = clean($pass2);


    $email_validate = filter_var($e_mail, FILTER_VALIDATE_EMAIL);
    if(check_length($name, 2, 25) && check_length($surname, 2, 25) && check_length($pass, 5, 25) && check_length($pass2, 5, 25) && check_pass($pass, $pass2) && !in_array($e_mail, $bd_email) && $email_validate) {
        echo "Success";
        logFile("Пользователь с эл. адресом $e_mail успешно зарегистрирован");
    } else if($email_validate===false){
        echo "E-mail введен не верно";
        logFile("Введенный эл. адрес не прошел валидацию");
    } else if(in_array($e_mail, $bd_email)){
        echo "Пользователь с данной эл. почтой уже зарегистрирован";
        logFile("Введенный эл. адрес уже существует в базе данных");
    } else if(check_length($name, 2, 25) === false || check_length($surname, 2, 25) === false){
        echo "Имя и фамилия должны быть от 2 до 25 символов";
    } else if(check_pass($pass, $pass2) === false){
        echo "Пароли не совпадают";
    } else {
        echo "Пароль дожен быть от 5 до 25 символов";
        }
    } else {
	    header("Location: ../index.php");
    }
?>