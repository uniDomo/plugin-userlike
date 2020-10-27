<?php

namespace userlikePlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class userlikePluginBottomJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('userlikePlugin::bottomScript');
    }
}
?>