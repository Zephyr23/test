<?php


namespace Nenad\TestBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nenad\TestBundle\Entity\Contact;
use Nenad\TestBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{

	public function indexAction()
	{
	    return $this->render('NenadTestBundle:Secured:index.html.twig');
	}
	public function contactAction()
	{
	   return $this->render('NenadTestBundle:Default:contact.html.twig', array(
          # 'contact'=>$contact
       ));
	}

    public function emailpostAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact, array(
            'action' => $this->generateUrl('nenad_email_post'),
            'method' => 'POST',
        ));


           $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Poruka za bicmana')
                    ->setFrom('zephyr.rs')
                    ->setTo($this->container->getParameter('nenad_test.emails.contact_email'))
                ->setBody($this->renderView('NenadTestBundle:Default:mail.txt.twig', array('contact' => $contact)));
               $this->get('mailer')->send($message);
               return $this->forward('NenadTestBundle:Default:contact', array('contact' => $contact->getName()));

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                #return $this->redirect($this->generateUrl('nenad_send'));
            }
       # }

        return $this->render('NenadTestBundle:Default:email.html.twig', array(
            'form' => $form->createView()
        ));
    }
}

?>
