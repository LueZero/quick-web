<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->IsSMTP();
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; // turn on SMTP authentication
// //這幾行是必須的

$mail->Username = "luezeroweb@gmail.com";
$mail->Password = "ruise5566";
//這邊是你的gmail帳號和密碼

$mail->FromName = "luezeroweb@gmail.com";
// 寄件者名稱(你自己要顯示的名稱)
$webmaster_email = "luezeroweb@gmail.com";
//回覆信件至此信箱


$email = "a0970937127@gmail.com";
// 收件者信箱
$name = "zero";
// 收件者的名稱or暱稱
$mail->From = $webmaster_email;


$mail->AddAddress($email, $name);
$mail->AddReplyTo($webmaster_email, "Squall.f");
//這不用改

$mail->WordWrap = 50;
//每50行斷一次行

//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "信件標題";
// 信件標題
$mail->Body = "信件內容";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "信件內容";
//信件內容(純文字版)

if (!$mail->Send()) {
  echo "寄信發生錯誤：" . $mail->ErrorInfo;
  //如果有錯誤會印出原因
} else {
  echo "寄信成功";
}