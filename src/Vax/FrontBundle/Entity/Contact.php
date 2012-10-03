<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Vax\FrontBundle\Entity;

class Contact
{
    
    protected $name;

    protected $email;

    protected $telephone;

    protected $subject;

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