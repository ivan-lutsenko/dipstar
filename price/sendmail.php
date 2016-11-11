<?php
/*$to = "mavric-2006@yandex.ru";*/
$to = "rybakovstas@gmail.com,dipstar.by@mail.ru";
/* loco@loco.by,  */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$square = $_POST['service'];
$product = $_POST['product'];

$error = '';
function checkPhone($str){return preg_match("/^[0-9-()+\s]{7,20}$/", $str);}
if(!$phone){$error .= "Пожалуйста, введите ваш телефон\r\n";echo $error; exit();}
else if(!checkPhone($phone)){$error .= 'Введите корректный номер';echo $error; exit();}

if(isset($_POST['phone'])) {
	if(!$error){
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	    $headers .= "From: diplom1.by/ <no-reply@diplom1.by>\r\n" .
		'Reply-To: no-reply@diplom1.by' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$subject = "Новая заявка diplom1.by";

		$body = "";
		if($name) $body .= "Контактное лицо: ".$name;
		if($phone) $body .= "<br>Номер телефона: ".$phone;
        if($email) $body .= "<br>Email: ".$email;
		if($product) $body .= "<br>Вид потолка: ".$product;
		$body .= "<br>Cсылка: http://".$_SERVER['HTTP_HOST'];

		$mail = mail($to, $subject, $body, $headers);
		if($mail){
			echo 'OK';
		} else {
			echo 'ERROR';
		}
	} else{
		echo $error;
	}
}


?>
