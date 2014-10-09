<?php
namespace Nenad\TestBundle\Controller;
use Nenad\TestBundle\Entity\Contact;
use Nenad\TestBundle\Form\ContactType;
use Nenad\TestBundle\Form\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

class SecuredController extends Controller
{
    public function loginAction(Request $request)
    {

        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

            if($request->getPathInfo()=="/homepage/login") {
                return $this->render(
                    'NenadTestBundle:Secured:index.html.twig',
                    array(
                        // last username entered by the user
                        'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                        'error' => $error,
                        'url' => $request->getPathInfo(),
                    )
                );
            }
        else{

            return $this->emailpostAction($request,$error);
        }

    }


    public function helloAction()
    {
        $user=$this->getUser();
        return $this->render('NenadTestBundle:Secured:hello.html.twig', array(
            'user'=>$user
        ));
    }

    public function contactAction($contact)
    {
        return $this->render('NenadTestBundle:Secured:contact.html.twig', array(
            'contact'=>$contact
        ));
    }

    public function emailpostAction(Request $request,$error)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact, array(
            'action' => $this->generateUrl('emaillogin'),
            'method' => 'POST',
        ));


        $form->handleRequest($request);

        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
                ->setSubject('Poruka za bicmana')
                ->setFrom('zephyr@email.rs')
                ->setTo($this->container->getParameter('nenad_test.emails.contact_email'))
                ->setBody($this->renderView('NenadTestBundle:Secured:mail.txt.twig', array('contact' => $contact)));
            $this->get('mailer')->send($message);
            return $this->forward('NenadTestBundle:Secured:contact', array('contact' => $contact->getName()));

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            #return $this->redirect($this->generateUrl('nenad_send'));
        }
        # }
        $session=$request->getSession();


        return $this->render(
            'NenadTestBundle:Secured:email.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error' => $error,
                'url' => $request->getPathInfo(),
                'form' => $form->createView(),
            )
        );
    }
}
?>