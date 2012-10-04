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
        $img_files = scandir('bundles/vaxfront/images/servicios/mothers');
        unset($img_files[0]);
        unset($img_files[1]);
        return $this->render('VaxFrontBundle:Page:mother.html.twig', array('images' => $img_files));
    }

    // SERVICIOS -- NOTEBOOK
    public function notebookAction() {
        $img_files = scandir('bundles/vaxfront/images/servicios/notebooks');
        unset($img_files[0]);
        unset($img_files[1]);
        return $this->render('VaxFrontBundle:Page:notebook.html.twig', array('images' => $img_files));
    }

    // SERVICIOS -- PLACAS DE VIDEO
    public function videocardAction() {
        $img_files = scandir('bundles/vaxfront/images/servicios/videos');
        unset($img_files[0]);
        unset($img_files[1]);
        return $this->render('VaxFrontBundle:Page:videocard.html.twig', array('images' => $img_files));
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
        $img_files = scandir('bundles/vaxfront/images/ubiquiti');
        unset($img_files[0]);
        unset($img_files[1]);
        return $this->render('VaxFrontBundle:Page:ubiquiti.html.twig', array('images' => $img_files));
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
                // return $this->redirect($this->generateUrl('contacto_enviado'));
            }
        }

        return $this->render('VaxFrontBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
        }






} // FIN CLASE PageController
