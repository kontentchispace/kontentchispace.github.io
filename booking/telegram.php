<?php

/* https://api.telegram.org/bot575819801:AAF9DM8civ8QJq-YsK3xj91LY9ZvfCjZOj8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$date = $_POST['user_date'];
$timein = $_POST['user_timein'];
$timeout = $_POST['user_timeout'];
$token = "575819801:AAF9DM8civ8QJq-YsK3xj91LY9ZvfCjZOj8";
$chat_id = "-300160583";
$arr = array(
  'Аты: ' => $name,
  'Тел: ' => $phone,
  'Дата: ' => $date,
  'Start: ' => $timein,
  'End:' => $timeout
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.php');
} else {
  echo "Error";
}
?>