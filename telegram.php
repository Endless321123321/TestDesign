<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$comment = $_POST['user_text'];
$token = "5592878155:AAFTkVdjpqjc2CtLUKmP5FzxJhO1aOLmIk8";
$chat_id = "1077316730";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Комментарий: ' => $comment,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
