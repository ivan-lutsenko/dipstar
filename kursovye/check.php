<?php 
   $mailto = 'diplomdipstar@gmail.com, dinfo@increase.by';
    /*$mailto = 'mavric-2006@yandex.ru';*/
$eol = "\n";
$subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта diplom1.by/kursovye') .'?=';
if($_POST['targetVal']){
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
    $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000000); 
    $subject_kurs =  substr(htmlspecialchars(trim($_POST['subject'])), 0, 1000000);
    $kurs_name =  substr(htmlspecialchars(trim($_POST['kurs_name'])), 0, 1000000);
    $mailfrom = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
    $targetVal = ($_POST['targetVal']);
    $titleToSend = ($_POST['titleToSend']);

	
$backurl="http://diplom1.by/kursovye/thanks.html?forma=form".$targetVal;
$headers= "MIME-Version: 1.0\r";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers  .= 'From: '.$mailfrom.$eol;
	if($name)
	{
		$msg.=  "
		Из формы: $titleToSend \r\n
		Имя: $name \r\n";
	}
	if($phone){
		 $msg.=  "
		Телефон: $phone \r\n";
	}
    if($mailfrom){
         $msg.=  "
		Email: $mailfrom \r\n";
	}
	if($subject_kurs){
         $msg.=  "
		Предмет: $subject_kurs \r\n";
	}
	if($kurs_name){
         $msg.=  "
		Название курсовой: $kurs_name \r\n";
	}

$body = $eol.stripslashes($msg).$eol;
mail($mailto,$subject, $body, $headers);

header("Location:$backurl");  
exit;
}else{
header("Location:http://diplom1.by");
}

?> 