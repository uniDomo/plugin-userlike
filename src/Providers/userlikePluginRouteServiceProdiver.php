<?php
 
namespace userlikePlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class userlikePluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('userlikePlugin','userlikePlugin\Controllers\ContentController@getuserlikePlugin');
    }
}