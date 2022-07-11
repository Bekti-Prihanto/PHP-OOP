<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Bekti");
var_dump($company);

$company->programmer = new BackendProgrammer("Bekti");
var_dump($company);

$company->programmer = new FrontendProgrammer("Bekti");
var_dump($company);

sayHelloProgrammer(new Programmer("Bekti"));
sayHelloProgrammer(new BackendProgrammer("Bekti"));
sayHelloProgrammer(new FrontendProgrammer("Bekti"));