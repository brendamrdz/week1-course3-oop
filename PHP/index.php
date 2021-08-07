<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberVan.php");
require_once("account.php");
$uberC = new UberX("CVB123", new Account("Andres Herrera", "AND456", "Chevrolet", "Spark"));
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberVan = new UberVan("TYU567", new Account("Andrea Ferran", "ANDA765", "Dodge", "Attitude"))
$uberX->setPassenger(6);
$uberPool->printDataCar();
?>