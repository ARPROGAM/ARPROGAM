<?php
////@Infotuit  dasturchi @GaffarovShoxrux
ob_start();
define('API_KEY','7151593074:AAGiultWelL0R8Su57MBEQHqSTPHCulvGL4');
$admin = "6535060082";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

   ////@Infotuit  dasturchi @GaffarovShoxrux
$dbConnection = new mysqli("localhost", "login", "parol", "login");

if ($dbConnection->connect_error) {

echo 'Mysql ulanmadi:'  . $dbConnection->connect_error;

}////@Infotuit  dasturchi @GaffarovShoxrux
    
    $update = json_decode(file_get_contents('php://input'));
    $message = $update->message;
    $tx = $message->text;
    $mid = $message->message_id;
    $cid = $message->chat->id;
    $data = $update->callback_query->data;
    $qid = $update->callback_query->id;
    $callcid = $update->callback_query->message->chat->id;
    $callmid = $update->callback_query->message->message_id;
    $mid2 = $update->callback_query->inline_message_id;
    $clid = $update->callback_query->from->id;
    $callname = $update->callback_query->from->first_name;
    $calluser = $update->callback_query->from->username;
    $callmid = $update->callback_query->message->message_id;
    $mmid = $update->callback_query->inline_message_id;
    $gid = $update->callback_query->message->chat->id;
    $first_name = $message->chat->first_name;
    $username = $message->from->username;
    $phone_number = $message->contact->phone_number;
    $contact = $message->contact;
    
    $inlinequery = $update->inline_query;
    $inline_id = $inlinequery->id;
    $inlinequery = $inlinequery->from->query;
  
    date_default_timezone_set("Asia/Tashkent");
    $time = date('H:i d.m.Y');
    $soat = date('H');
    $minut = date('i');
    $yil = date('y');
    $oy = date('m');    
    $kun = date('d');
    
  ////@Infotuit  dasturchi @GaffarovShoxrux
 $sql= "SELECT * FROM baza WHERE telegramID='$cid'";
$result = $dbConnection->query($sql);
foreach($result as $results) {
 $qadamsql =  $results['qadam'];
}   
    
if($tx){
$sql = "SELECT * FROM baza WHERE telegramID = '$cid'";
$result = mysqli_query($dbConnection, $sql);
$conn = mysqli_fetch_assoc($result);
if ($conn) {
}else{
$sql2 = "INSERT INTO baza (ism,soat,telegramID,qadam) VALUES ('0','0','$cid','0')";
$result2 = mysqli_query($dbConnection, $sql2);
}
}
////@Infotuit  dasturchi @GaffarovShoxrux

if($tx == "/start"){
if($qadamsql != "ok"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*@Infotuit Assalomu alaykum, xurmatli foydalanuvchi!*

✏️ *Iltimos* Ism familya sharifi to'liq yozib yuboring!",
'parse_mode'=>"markdown",
'reply_markup'=>$menu,
]);
$sql2 = "UPDATE baza SET qadam = 'NULL' WHERE telegramID ='$cid' ";
$result2 = mysqli_query($dbConnection,$sql2);
exit;
}else{bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*@Infotuit  ⚠️ Kechirasiz siz avval ro'yxatdan o'tgansiz!!*",
'parse_mode'=>"markdown",
'reply_markup'=>$menu,
]);
$sql2 = "UPDATE baza SET qadam = 'ok' WHERE telegramID ='$cid' ";
$result2 = mysqli_query($dbConnection,$sql2);
exit;
}
}
////@Infotuit  dasturchi @GaffarovShoxrux

if($qadamsql == "NULL"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*@Infotuit  Siz muvofaqqiyatli ro'yxatdan o'tdingiz 16-oktyabr kuni soat 11:00 da ''Alisher Navoiy nomidagi kino saroyida'' bo'lib o'tadigan taqdimot marosida kutamiz! *",
'parse_mode'=>"markdown",
'reply_markup'=>$korishlarim,
]);
$tx = str_replace("'","`",$tx);
$tx = str_replace("","`",$tx);
$sql2 = "UPDATE baza SET qadam = 'ok', ism = '$tx', soat='$time'  WHERE telegramID ='$cid' ";
$result2 = mysqli_query($dbConnection,$sql2);

$sql2aa = "INSERT INTO okey (telegramID,soat) VALUES ('$cid','$time')";
$result2 = mysqli_query($dbConnection, $sql2aa);
}

////@Infotuit  dasturchi @GaffarovShoxrux


$sql1 = "SELECT * FROM baza";
$result1 = mysqli_query($dbConnection, $sql1);
    $stat1 = mysqli_num_rows($result1);
    
    $sql1q = "SELECT * FROM okey";
$result1a = mysqli_query($dbConnection, $sql1q);
    $stat1aa = mysqli_num_rows($result1a);

if($tx == "/uz" and $cid == "523178386"  or $cid =="204059670" ){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"@Infotuit  Foydalanuvchilar
*Ro'yxatdan o'tganlar:* `$stat1aa `
*Ro'yxatdan o'tmaganlar:* `$stat1`",
'parse_mode'=>"markdown",
]);
}

////@Infotuit  dasturchi @GaffarovShoxrux