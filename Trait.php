<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Ridwan");
$person->hello("Ivana");

$person->name = "Bekti";
var_dump($person);

$person->run();