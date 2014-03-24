<?php

namespace Hinatachii\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class BugherdServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
       
        $app['bugherd'] = $app->share(function () use ($app) {
           
              return new \Bugherd\Client($app['bugherd.options']['apikey']);
        });
    }

    public function boot(Application $app)
    {
    }
}
