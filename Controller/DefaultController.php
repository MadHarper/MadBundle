<?php

namespace MadHarper\MadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MadBundle/Default/index.html.twig');
    }
}
