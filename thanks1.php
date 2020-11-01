<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
<?php 
ini_set('display_errors', 0);

$name=$_POST['name'];
$email=$_POST['email'];
/*$goiken=$_POST['goiken'];*/

$name=htmlspecialchars($name);
$email=htmlspecialchars($email);
/*$goiken=htmlspecialchars($goiken);*/

print $name;
print'様<br>';
print'ご予約ありがとうございました<br>';

/*print$goiken;*/
print'<br>';
print $email;
print 'にメールを送りましたのでご確認ください。<br><br>';

$mail_sub='アンケートを受け付けました。';
$mail_body=$name."様へ\nアンケートご協力ありがとうございました。";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='From:xxx@xxx.co.jp';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email,$mail_sub,$mail_body,$mail_head);

?>
</body>
</html>