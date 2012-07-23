<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace site\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nom', 'text', array('label' => 'Votre nom'));
        $builder->add('email', 'email', array('label' => 'Votre email'));
        $builder->add('sujet');
        $builder->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}