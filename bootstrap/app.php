<?php

use App\Core\App;
use App\Providers\AppServiceProvider;
use League\Container\ReflectionContainer;
use App\Core\Container;
use App\Core\Example;


require '../vendor/autoload.php';

$container = Container::getInstance();

$container->delegate(new ReflectionContainer());


$container->addServiceProvider(new AppServiceProvider());

var_dump(Container::getInstance()->get(Example::class));

die();


$app = new App();

$app->run();
