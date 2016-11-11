<?php 
   /* $mailto = 'mavric-2006@yandex.ru';    */
  $mailto = 'dipstar.by@mail.ru,7951027@gmail.com';  
$eol = "\n";
$subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта diplom1.by') .'?=';
$boundary = "--".md5(uniqid(time())); // генерируем разделитель
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
    $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000000); 
    $email =  substr(htmlspecialchars(trim($_POST['email'])), 0, 1000000); 
    $whatForm =  substr(htmlspecialchars(trim($_POST['whatForm'])), 0, 1000000); 
 switch($whatForm){
        case "1":
            $formTitle = "Письмо с основного сайта http://diplom1.by/";
            $subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с основного сайта http://diplom1.by/') .'?=';
            $form = "form1";
            break;   
        case "2":
            $formTitle = "Письмо с сайта http://diplom1.by/otchety.html";
            $subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта http://diplom1.by/otchety.html') .'?=';
            $form = "form2";
            break;     
        case "3":
            $formTitle = "Письмо с сайта http://diplom1.by/kontrolnye.html";
            $subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта http://diplom1.by/kontrolnye.html') .'?=';
            $form = "form3";
            break;        
        case "4":
            $formTitle = "Письмо с сайта http://diplom1.by/diplomnye.html";
            $subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта http://diplom1.by/diplomnye.html') .'?=';
            $form = "form4";
            break;     
    }
    
    /* Files */
  
    
$backurl="http://diplom1.by/thanks.html?forma=$form";
$headers= "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $body = "--".$boundary."\r\n";
  $body .= "Content-type: text/plain; charset=utf-8\r\n";
  $body .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
$headers  .= 'From: '.$email.$eol;
    $msg=  "
        Имя: $name".$eol."
        Телефон: $phone".$eol."
        Email: $email"; 
        
$body .= $eol.stripslashes($msg).$eol;


 


mail($mailto,$subject, $body, $headers);

header("Location:$backurl");  
exit;

}else{
header("Location:http://diplom1.by/");
}

?> 