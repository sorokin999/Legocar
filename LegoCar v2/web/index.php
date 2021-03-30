<?php

spl_autoload_register(function($class) {
    require(__DIR__ . '/../src/' . $class . '.php');
});


$connection = new PDO('mysql:host=localhost;dbname=car', 'root', '123');

Config::setOption('connection', $connection);

$userMapper = new UserDataMapper($connection);

$user = $userMapper->findUserById(1);

var_dump('ui', $user);
