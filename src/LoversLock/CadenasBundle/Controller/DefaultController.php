<?php

namespace LoversLock\CadenasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/login/check-facebook")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
