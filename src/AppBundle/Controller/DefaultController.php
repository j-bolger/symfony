<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $argsArray = [
            'name'=>'Jack Bolger'
        ];
        $templateName = 'index';

        return $this->render($templateName . '.html.twig', $argsArray);
    }
}
