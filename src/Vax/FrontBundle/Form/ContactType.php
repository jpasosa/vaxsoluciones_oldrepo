<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Vax\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;  // esto no me andaba
use Symfony\Component\Form\FormBuilderInterface; // tuve que usar esto

class ContactType extends AbstractType
{

    // aqui toma las validaciones antes de pulsar el enviar
    public function buildForm(FormBuilderInterface $builder, array $options)
    // public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array('required' => false));
        
        $builder->add('email', 'text', array('required' => false));
        
        $builder->add('subject', 'text', array('required' => false));
        
        $builder->add('body', 'textarea', array('required' => false));


    }

    public function getName()
    {
        return 'contact';
    }
}