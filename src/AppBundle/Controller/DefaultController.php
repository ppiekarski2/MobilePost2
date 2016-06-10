<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/postmanmanager", name="pai_postman_manager")
     */
    public function indexAction()
    {
        return $this->render('@App/Default/index.html.twig');
    }
}
