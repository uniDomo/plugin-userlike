<?php

namespace jsPlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class jsPluginTopJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('jsPlugin::topScript');
    }
}
?>