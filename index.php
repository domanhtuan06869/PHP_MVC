<?php

$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);
$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);

require_once "configDB/Database.php";
require_once "controller/Persons.php";
require_once "model/PersonsModel.php";
$db = new Database();
$model = new PersonsModel($db);
$controllerPersons = new Persons($model);

if ($uri[0] == "persons") {
    require_once "controller/RouterController.php";
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>404</h1><br><br><h2><center>Halaman yang anda cari tidak ada</center></h2></body></html>';
}
