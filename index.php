<?php

$j = json_decode(file_get_contents("enter-widget-json-url-here!"), true);

print("<b>Name:</b> ".$j["name"]."<br>");

print("<br><b>Channels:</b><br>");
foreach ($j["channels"] as $thing) {
	print($thing["name"]."<br>");
}
print("<br><b>URL:</b> ".$j["instant_invite"]."<br><br><b>Online Members:</b><br>");

foreach ($j["members"] as $m) {
	print($m["username"]." - "."Avatar: <img width=\"20\" height=\"20\" src=\"".$m["avatar_url"]."\"> - Status: "."<img width=\"10\" height=\"10\" src=\"".$m["status"].".png\">".(isset($m["game"]["name"]) ? " - Game: ".$m["game"]["name"] : "")."<br>---------------------------<br>");
}

?>
