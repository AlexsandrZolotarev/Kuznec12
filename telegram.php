<?php
$name = $_POST['nick'];
$phone = $_POST['phone'];
$token = "5732536272:AAH8WoSUSj3jcoupKLdV50-AphjdUDsT4G0";
$chat_id = "-602599820";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>