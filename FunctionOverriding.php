<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ivana";
$manager->sayHello("Alam");

$vp = new VicePresident();
$vp->name = "Bekti";
$vp->sayHello("Alam");
