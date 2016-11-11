<?php 
require_once 'lib/swift_required.php';

$mailto = 'mavric-2006@yandex.ru';
$backurl="http://diplom1.by/torrent/thanks.html";

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
  ->setSubject('Письмо от клиента с сайта diplom1.by/torrent')

  // Set the From address with an associative array
  ->setFrom(array($mailto => 'John Doe'))

  // Set the To addresses with an associative array
  ->setTo($mailto)

  // Give it a body
  ->setBody(strip_tags(msg))

  // And optionally an alternative body
  ->addPart($msg, 'text/html')
  ;
  
  for( $i = 0; $i < count($_FILES['file']); $i++) {
    if ( !empty( $_FILES['file']['tmp_name'][$i] ) and $_FILES['file']['error'][$i] == 0 ) {
    
    $message->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name'])->setFilename($_FILES['file']['name'][$i]));
    }
  }
  
  // Create the Transport
$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the message
$result = $mailer->send($message);

/*
$mailto = 'mavric-2006@yandex.ru';
$eol = "\n";
$subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта diplom1.by/torrent') .'?=';
$boundary = "--".md5(uniqid(time())); // генерируем разделитель
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

    
    /* Files */
  
    /*
$backurl="http://diplom1.by/torrent/thanks.html";
$headers= "MIME-Version: 1.0\r\n";
//$headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $body = "--".$boundary."\r\n";
  $body .= "Content-type: text/plain; charset=utf-8\r\n";
  $body .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
$headers  .= 'From: '.$email.$eol;
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
$body .= $eol.stripslashes($msg).$eol;


 $filepath = array();
  $filename = array();
  for( $i = 0; $i < count($_FILES['file']); $i++) {
    if ( !empty( $_FILES['file']['tmp_name'][$i] ) and $_FILES['file']['error'][$i] == 0 ) {
      $filepath[] = $_FILES['file']['tmp_name'][$i];
      $filename[] = $_FILES['file']['name'][$i];
    }
  }

  $file = '';
  $count = count( $filepath );
  if ( $count > 0 ) {
    for ( $i = 0; $i < $count; $i++ ) {
      $fp = fopen($filepath[$i], "r");
      if ( $fp ) {
        $content = fread($fp, filesize($filepath[$i]));
        fclose($fp);
        $file .= "--".$boundary."\r\n";
        $file .= "Content-Type: application/octet-stream\r\n";
        $file .= "Content-Transfer-Encoding: base64\r\n";
        $file .= "Content-Disposition: attachment; filename=\"".$filename[$i]."\"\r\n\r\n";
        $file .= chunk_split(base64_encode($content))."\r\n";      
      }
    }
  }
  $body .= $file."--".$boundary."--\r\n";



mail($mailto,$subject, $body, $headers);
*/
echo 'done';
// header("Location:$backurl");  
exit;

}else{
header("Location:http://diplom1.by/torrent");
}

?> 