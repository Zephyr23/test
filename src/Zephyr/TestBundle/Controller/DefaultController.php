<?php

namespace Zephyr\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return $this->render('ZephyrTestBundle:Default:index.html.twig', array('name'=>$name));
    }
	public function nenadAction()
{
	return $this->render('ZephyrTestBundle:Default:layout.html.twig');
}
}
