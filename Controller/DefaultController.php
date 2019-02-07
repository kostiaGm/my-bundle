<?php

namespace MyLib\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyLibMyBundle:Default:index.html.twig');
    }
}
