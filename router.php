<?php

$btag=$_POST[btag];
$mode=$_POST[mode];
$reg=$_POST[region];
$platform=$_POST[platforme];
$btag=str_replace("#", "-", $btag);

header("Location: $platform/$reg/profiles/$btag/$mode");
