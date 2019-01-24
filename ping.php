<?php
if (in_array($userID, $admins)){
if($msg == 'ping' || $msg == 'Ping' || $msg == 'ربات' || $msg == '/ping' || $msg == '1'){
$MadelineProto->messages->sendMessage(['peer' => $chatID, 'reply_to_msg_id' => $msg_id ,'message' => "<b>PonG:)</b>",'parse_mode' => 'html']);
}
}