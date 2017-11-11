<?php
include "classes/Computer.php";
include "classes/Lenovo.php";
include "classes/MacBook.php";
include "classes/Asus.php";
$asus = new Asus();
$asus->setComputerName('Asus');
$asus->identifyUser();
$MacBook = new MacBook();
$MacBook->setComputerName('MacBook');
$MacBook->identifyUser();
$lenovo = new Lenovo();
$lenovo->setComputerName('Lenovo');
$lenovo->identifyUser();


