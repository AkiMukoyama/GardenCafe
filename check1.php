<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
<?php 
$shop_list=$_POST['shop_list'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$ryear=$_POST['ryear'];
$rmon=$_POST['rmon'];
$rday=$_POST['rday'];
$reserve_time=$_POST['reserve_time'];

$shop_list=htmlspecialchars($shop_list);
$name=htmlspecialchars($name);
$tel=htmlspecialchars($tel);
$email=htmlspecialchars($email);
$ryear=htmlspecialchars($ryear);
$rmon=htmlspecialchars($rmon);
$rday=htmlspecialchars($rday);
$reserve_time=htmlspecialchars($reserve_time);

if($name==''){
print'お名前が入力されていません。<br>';
}else{

print $_POST['name'];
print'様';
print'<br>';

}
if($shop_list==''){
print'店名が入力されていません。<br>';
}else{
print $_POST['shop_list'];
print'店';
print'<br>';
}
if($tel==''){
print'電話番号が入力されていません。<br>';
}else{
print'電話番号：';
print $tel;
print'<br>';
}

if($email==''){
print'メールアドレスが入力されていません。<br>';
}else{
print'メールアドレス：';
print $email;
print'<br>';
}
if($ryear==''){
print 'ご予約日時が入力されていません。<br>';
}else{
print'ご予約日：';
print $ryear;
print'年';
print $rmon;
print'月';
print $rday;
print'日<br>';
print'ご予約時間：';
print $reserve_time;


print'<br>';
}
if($shop_list==''||$name==''||$email==''||$tel==''||$ryear==''||$rmon==''||$rday==''||$reserve_time=='')
{
print'<form>';
print'<input type="button" onclick="history.back()" value="戻る">';
print'</form>';
}
else
{
print'<form method="post" action="thanks1.php">';
print'<input name="shop_list" type="hidden" value="'.$shop_list.'">';
print'<input name="name" type="hidden" value="'.$name.'">';
print'<input name="tel" type="hidden" value="'.$tel.'">';
print'<input name="email" type="hidden" value="'.$email.'">';
print'<input name="ryear" type="hidden" value="'.$ryear.'">';
print'<input name="rmon" type="hidden" value="'.$rmon.'">';
print'<input name="rday" type="hidden" value="'.$rday.'">';
print'<input name="rday" type="hidden" value="'.$reserve_time.'">';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="OK">';
print'</form>';
}

?>
</body>
</html>