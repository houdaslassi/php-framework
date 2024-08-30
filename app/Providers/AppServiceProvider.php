<?php

namespace App\Providers;

use App\Core\Example;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
   public function boot(): void
   {
       var_dump('App is booting...');
   }

    public function register(): void
    {
        /*$this->getContainer()->add(Example::class, function () {
            return new Example();
        });*/

    }

    public function provides(String $id): bool
    {
       $services = [
           //Example::class
       ];

       return in_array($id, $services);
    }
}

