<?php

namespace jsPlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class jsPluginBottomJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('jsPlugin::bottomScript');
    }
}
?>