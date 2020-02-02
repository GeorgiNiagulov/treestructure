<?php

session_start();
spl_autoload_register();

$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new \Database\PDODatabase($pdo);
$categoryRepository = new \App\Repository\CategoryRepository($db, $dataBinder);
$categoryService = new \App\Service\CategoryService($categoryRepository);
$categoryHttpHandler = new \App\Http\CategoryHttpHandler($template, $dataBinder, $categoryService);
