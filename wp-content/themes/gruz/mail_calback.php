<?php
/**
 * Template Name: order_cons
 */
 ?>
 <?php
    if(isset($_POST['fio'])) {
          $sendto = 'kirillsvr@mail.ru';
      $subject = "Отправлено из формы обратной связи";
  // make letter headers
  $headers  = "From: contact@".($_SERVER["HTTP_HOST"])."\r\n";
  $headers .= 'noreply@'.($_SERVER["HTTP_HOST"]).'\r\n';
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
  $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
  $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>$subject</h2>\r\n";
  // make letter body
      $msg .= "<p><strong>Имя: </strong> ".$_POST['fio']."</p>\r\n";
        if(isset($_POST['phone_'])){
    $msg .= "<p><strong>Телефон: </strong> ".$_POST['phone_']."</p>\r\n";
  }
  if(isset($_POST['clock_other'])){
$msg .= "<p><strong>Время звонка: </strong> ".$_POST['clock_other']."</p>\r\n";
}
  $msg .= "</body></html>";
  // send message
  if(@mail($sendto, $subject, $msg, $headers)){
 echo "ok" ; } } ?>
