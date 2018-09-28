<?php
$operator = "aleksejmaxim0w@yandex.ru";
$sitename = "IT Next";

function clean($value = "") {
	$value = trim($value);//Обрезаем пробелы в начале и конце
	$value = stripslashes($value);//Удаляем экранирование символов
	$value = strip_tags($value);//Удаляем экранирование символов
	$value = htmlspecialchars($value);//Удаляем экранирование символов
	return $value;
}
function check_length($value = "", $min, $max) {
	$result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
	return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$e_mail = $_POST['e-mail'];
	$message = $_POST['message'];
	$name = clean($name);
	$e_mail = clean($e_mail);
	$message = clean($message);

	if(!empty($name) && !empty($e_mail) && !empty($message)) {
		$email_validate = filter_var($e_mail, FILTER_VALIDATE_EMAIL);
		if(check_length($name, 2, 25) && check_length($message, 5, 1000) && $email_validate) {
			echo json_encode(3);
			$recipient = $e_mail;
		} else if($email_validate===false){
			echo json_encode(2);
		} else{
			echo json_encode(1);
		}
	} else {
		echo json_encode(0);
	}
} else {
	header("Location: ../index.php");
}

$pagetitle = "Сообщение с сайта $sitename";
$message2 = "Спасибо $name, в ближайшее время мы ответим вам";
mail($recipient, $pagetitle, $message2, "Content-type: text/plain; charset=\"utf-8\"\n From: $operator");
?>