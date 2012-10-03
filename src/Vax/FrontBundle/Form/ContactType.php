<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Vax\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;  // esto no me andaba
use Symfony\Component\Form\FormBuilderInterface; // tuve que usar esto

class ContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    // public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}