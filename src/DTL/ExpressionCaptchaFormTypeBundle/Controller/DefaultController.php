<?php

namespace DTL\ExpressionCaptchaFormTypeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DTLExpressionCaptchaFormTypeBundle:Default:index.html.twig', array('name' => $name));
    }
}
