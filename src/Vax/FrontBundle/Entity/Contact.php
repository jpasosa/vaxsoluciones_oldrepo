<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Vax\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    

    protected $name;


    /**
     * @Assert\NotBlank(
     *     message = "Debes escribir un mail.")
     * @Assert\Email(
     *     message = "Email no válido.")
     * 
     */
    protected $email;

    protected $telephone;

    protected $subject;


    /**
     * @Assert\NotBlank(
     *     message = "Debes escribir un comentario.")
     * 
     */
    protected $body;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelephone($telephone)
    {
        return $this->telephone;
    }
    
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }
}