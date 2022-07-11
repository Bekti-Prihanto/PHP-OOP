<?php

require_once "data/Person.php";

$bekti = new Person("Bekti", "Semarang");
$bekti->name = "Bekti";
$bekti->sayHello("Ivana");

$ivana = new Person("Ivana", "Ungaran");
$ivana->name = "Ivana";
$ivana->sayHello(null);

$bekti->info();
$ivana->info();