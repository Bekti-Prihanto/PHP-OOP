<?php

$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "Bekti Prihanto", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Bekti Prihanto,Programmer,Zaman-Now");

var_dump($result);