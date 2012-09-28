<?php


namespace Vax\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


// Para el formulario de contacto
use Vax\FrontBundle\Entity\Contact;
use Vax\FrontBundle\Form\ContactType;




class PageController extends Controller
{
    
    
    // HOMEPAGE
    public function homepageAction() {
        return $this->render('VaxFrontBundle:Page:homepage.html.twig');
    }

    // HOMEPAGE - QUIENES SOMOS
    public function aboutusAction() {
        return $this->render('VaxFrontBundle:Page:aboutus.html.twig');
    }

    // HOMEPAGE -- HISTORIA
    public function historyAction() {
        return $this->render('VaxFrontBundle:Page:history.html.twig');
    }





    // SERVICIOS
    public function serviceAction() {
        return $this->render('VaxFrontBundle:Page:service.html.twig');
    }

    // SERVICIOS -- GARANTIA
    public function warrantyAction() {
        return $this->render('VaxFrontBundle:Page:warranty.html.twig');
    }


    // SERVICIOS -- MOTHERBOARD
    public function motherAction() {
        return $this->render('VaxFrontBundle:Page:mother.html.twig');
    }

    // SERVICIOS -- NOTEBOOK
    public function notebookAction() {
        return $this->render('VaxFrontBundle:Page:notebook.html.twig');
    }

    // SERVICIOS -- PLACAS DE VIDEO
    public function videocardAction() {
        return $this->render('VaxFrontBundle:Page:videocard.html.twig');
    }

    // SERVICIOS -- SEGURIDAD Y COMUNICACIONES
    public function securityAction() {
        return $this->render('VaxFrontBundle:Page:security.html.twig');
    }




    // NUESTROS CLIENTES
    public function clientsAction() {
        return $this->render('VaxFrontBundle:Page:clients.html.twig');
    }
    


    // UBIQUITI
    public function ubiquitiAction() {
        return $this->render('VaxFrontBundle:Page:ubiquiti.html.twig');
    }




    // OFERTAS
    public function dealsAction() {
        return $this->render('VaxFrontBundle:Page:deals.html.twig');
    }




    // FAQ
    public function faqAction() {
        return $this->render('VaxFrontBundle:Page:faq.html.twig');
    }




    // CONTACTO
    public function contactAction() {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('contacto'));
            }
        }

        return $this->render('VaxFrontBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
        }






} // FIN CLASE PageController
