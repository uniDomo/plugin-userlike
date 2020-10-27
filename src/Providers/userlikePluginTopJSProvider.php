<?php

namespace userlikePlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class userlikePluginTopJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('userlikePlugin::topScript');
    }
}
?>