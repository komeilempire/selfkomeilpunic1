<?php
$admins = [
  602899187,
];
$listplugins = [
  "ping",
  "help",
  "option"
];
$cplug = count($listplugins) - 1;
for($n=0; $n<=$cplug; $n++) {
  $pluginlist = "p/".$listplugins[$n].".php";
  include($pluginlist);
}
$data = json_decode(file_get_contents("data.json"),true);
$markread = $data["data"]["markread"];
$typing = $data["data"]["typing"];
$contacts = $data["data"]["contacts"];
$link = $data["data"]["link"];
unlink("MadelineProto.log");







