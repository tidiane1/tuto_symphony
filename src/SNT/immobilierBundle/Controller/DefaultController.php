<?php

namespace SNT\immobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('immobilierBundle:Default:index.html.twig');
    }
}
