<?php
require_once("framework/main.php");

$appInit = new AppInit("framework"); // initialize the framework
$appFacade = new AppFacade(new SettingsManager("settings.json")); // define server settings and sections

Autoloader::init("app"); // init the server
DBWrapper::configure("localhost", "root", "", "ourmap"); // init the database connection

$currentPage = $appFacade->getCurrentSection("service");

$appFacade->handleSectionRequest($currentPage); //autoload and run section controller entry-point method
?>