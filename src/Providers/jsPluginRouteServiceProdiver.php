<?php
 
namespace jsPlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class jsPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('jsPlugin','jsPlugin\Controllers\ContentController@getjsPlugin');
    }
}