<?php

use App\Core\App;
use Spatie\Ignition\Ignition;
use League\Container\Container;
use App\Providers\AppServiceProvider;
use League\Container\ReflectionContainer;


require '../vendor/autoload.php';

Ignition::make()->register();

$container = new Container();

$container->delegate(new ReflectionContainer());


$container->addServiceProvider(new AppServiceProvider());

var_dump($container->get(\App\Core\Example::class));

die();


$app = new App();

$app->run();
