<?php

namespace Nenad\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

	public function indexAction()
	{
	    return $this->render('NenadTestBundle:Default:index.html.twig');
	}
	public function emailAction()
	{
	    return $this->render('NenadTestBundle:Default:email.html.twig');
	}

    public function emailpostAction()
    {
        die('postovao sam i poslao na mail');
    }
	
}

?>
