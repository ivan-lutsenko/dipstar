<?php 
require_once 'lib/swift_required.php';

/* $mailto = 'mail.dipstar@gmail.com'; */
/* $mailto = 'mavric-2006@yandex.ru'; */
$mailto = 'mail.dipstar@gmail.com';
$backurl="http://diplom1.by/diplom/thanks.html?button=true";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $theme = substr(htmlspecialchars(trim($_POST['theme'])), 0, 1000); 
    $predmet_raboty = substr(htmlspecialchars(trim($_POST['subject'])), 0, 1000); 
    $type = substr(htmlspecialchars(trim($_POST['type'])), 0, 1000); 
    $datepicker = substr(htmlspecialchars(trim($_POST['datepicker'])), 0, 1000); 
    $dopmat = substr(htmlspecialchars(trim($_POST['dopmat'])), 0, 1000);
    $commentsInfo = substr(htmlspecialchars(trim($_POST['commentsInfo'])), 0, 1000);
    $dopTrebov = substr(htmlspecialchars(trim($_POST['dopTrebov'])), 0, 1000);
    $name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
    $email = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000); 
    $phone =  substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000000); 
    
    $msg=  "
       
        <p>Тема работы: $theme</p>
        <p>Предмет работы: $predmet_raboty</p>
        <p>Тип работы: $type</p>
        <p>Срок выполнения: $datepicker</p>
        <p>Доп. материалы: $dopmat</p>
        <p>Комментарии в файлам: $commentsInfo</p>
        <p>Дополнительные требования: $dopTrebov</p>
        <p>Имя: $name</p>
        <p>E-mail: $email</p>
        <p>Телефон: $phone</p>
        ";

// Create the message
$message = Swift_Message::newInstance()

  // Give the message a subject
  ->setSubject('Заказ работы с сайта diplom1.by/diplom')

  // Set the From address with an associative array
  ->setFrom(array($mailto => $email))

  // Set the To addresses with an associative array
  ->setTo($mailto)

  // Give it a body
  ->setBody(strip_tags(msg))

  // And optionally an alternative body
  ->addPart($msg, 'text/html')
  ;
  
  for( $i = 0; $i < count($_FILES['file']['name']); $i++) {
    if ( !empty( $_FILES['file']['tmp_name'][$i] ) and ($_FILES['file']['error'][$i] == 0) ) {
    
    $message->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name'][$i])->setFilename($_FILES['file']['name'][$i]));
    }
  }
  
  // Create the Transport
$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the message
$result = $mailer->send($message);

 header("Location:$backurl");  
exit;

}else{
header("Location:http://diplom1.by/diplom/");
}

?> 