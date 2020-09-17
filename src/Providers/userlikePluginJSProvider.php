<?php

namespace userlikePlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class userlikePluginJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('userlikePlugin::userlikeScript');
    }
}
?>