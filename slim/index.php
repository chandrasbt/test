<?php
require 'vendor/autoload.php';
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection([
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'test',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

echo var_dump($capsule->table('questions')->get());
