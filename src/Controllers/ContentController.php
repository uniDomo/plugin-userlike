<?php

namespace jsPlugin\Controllers;
 
 
 use Plenty\Plugin\Controller;
 use Plenty\Plugin\Templates\Twig;
  
 class ContentController extends Controller
 {
     public function getHeadPlugin(Twig $twig):string{
         return $twig->render('jsPlugin::Index');
     }
 }