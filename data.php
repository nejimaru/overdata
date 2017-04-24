<?php
$tab=explode("/", $_SERVER[REDIRECT_URL]);
$plat=$tab[1];
$reg=$tab[2];
$btag=$tab[4];
$mode=$tab[5];

$tag=str_replace("-", "#", $btag);


$json = file_get_contents("https://api.lootbox.eu/$plat/$reg/$btag/$mode/heroes");
$hbasic = json_decode($json,true);
$json = file_get_contents("https://api.lootbox.eu/$plat/$reg/$btag/$mode/allHeroes/");
$glb = json_decode($json,true);
$json = file_get_contents("https://api.lootbox.eu/$plat/$reg/$btag/profile");
$rank = json_decode($json,true);
$json = file_get_contents("https://api.lootbox.eu/$plat/$reg/$btag/$mode/hero/Genji%2CMccree%2CPharah%2CReaper%2CSoldier76%2CTracer%2CBastion%2CHanzo%2CJunkrat%2CMei%2CTorbjoern%2CWidowmaker%2CDVa%2CReinhardt%2CRoadhog%2CWinston%2CZarya%2CAna%2CLucio%2CMercy%2CSymmetra%2CZenyatta/");
$all = json_decode($json,true);
foreach ($all as $key => $value) {
  foreach ($hbasic as $k => $v) {
    foreach ($v as $y => $a) {
      if($a === $key){
      $all["$key"]["image"]=$v["image"];
      $all["$key"]["name"]=$a;
      }
      elseif ( (($key === "Soldier76") && ($a === "Soldier: 76")) || (($key === "DVa") && ($a === "D.Va")) ||(($key === "Torbjoern") && ($a === "Torbj&#xF6;rn")) ||(($key === "Mccree") && ($a === "McCree") || (($key === "Lucio") && ($a === "L&#xFA;cio")))) {
        $all["$key"]["image"]=$v["image"];
        $all["$key"]["name"]=$a;
      }
    }
  }
}
