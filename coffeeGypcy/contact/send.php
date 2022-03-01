<?php

$name = htmlspecialchars($_POST['name']);

$email = htmlspecialchars($_POST['email']);

$title = htmlspecialchars($_POST['title']);

$comment = htmlspecialchars($_POST['comment']);


$email_title = 'coffee Gypcy * お問い合わせありがとうございます';
$email_from = 'noreply@coffeegypcy.com';

$email_body = <<< email
{$name}様

＊こちらのメールは、自動返信メールです。

この度は、coffee Gypcyにお問い合わせいただき、ありがとうございます。
以下の内容で承りました。
内容を確認し、1日以内にご返信させていただきます。
ご返信まで、少々お待ちくださいませ。

-----------------------------

*氏名
{$name}様

*メールアドレス
{$email}

*件名
{$title}

*お問い合わせ内容
{$comment}

-----------------------------

*****************************
珈琲と純喫茶のアーカイブサイト
coffee Gypcy

Asami Yamamori
090-0000-0000
info@coffeegypcy.com
*****************************

email;

mb_internal_encoding("UTF-8");
mb_language("Japanese");
mb_send_mail($email,$email_title,$email_body,$email_from);


// 担当者にメールを送る
$tantou_email ='konomanma@i.softbank.jp';
$tantou_title ='coffeeGypcy お問い合わせありました';
$tantou_from ='noreply@coffeegypcy.com';

$tantou_body = <<< email
○お客様詳細

-----------------------------

*氏名
{$name}様

*メールアドレス
{$email}

*件名
{$title}

*お問い合わせ内容
{$comment}

-----------------------------

email;

mb_internal_encoding("UTF-8");
mb_language("Japanese");
mb_send_mail($email,$email_title,$email_body,$email_from);


header('location:http://intp.site/244/coffeeGypcy/contact/thanks.html');

?>