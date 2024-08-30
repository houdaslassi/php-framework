<?php

namespace App\Providers;

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
        $this->getContainer()->add('name', function () {
            return 'Houda';
        });

    }

    public function provides(String $id): bool
    {
       $services = [
           'name'
       ];

       return in_array($id, $services);
    }
}

