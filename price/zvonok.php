<?php 
 /* $mailto = 'mavric-2006@yandex.ru';  */
 $mailto = 'Dipstar.by@mail.ru'; 
$eol = "\n";
$subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта diplom1.by/checklist c просьбой перезвонить') .'?=';
$boundary = "--".md5(uniqid(time())); // генерируем разделитель
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
    $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000000); 

    
    /* Files */
  
    
$backurl="http://diplom1.by/thanks.html?zvonok=true&page=cheklist";
$headers= "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $body = "--".$boundary."\r\n";
  $body .= "Content-type: text/plain; charset=utf-8\r\n";
  $body .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
$headers  .= 'From: '.$email.$eol;
    $msg=  "
       

        Имя: $name".$eol."
        Телефон: $phone"; 
        
$body .= $eol.stripslashes($msg).$eol;


 


mail($mailto,$subject, $body, $headers);

header("Location:$backurl");  
exit;

}else{
header("Location:http://diplom1.by/");
}

?> 