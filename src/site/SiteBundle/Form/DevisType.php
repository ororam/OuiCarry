<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace site\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('email', 'email');
        $builder->add('type', 'choice', array('choices' =>
            array('Vêtements, accessoires' => 'Vêtements, accessoires', 
                'Sac à main, sacoche' => 'Sac à main, sacoche',
                'Chaussures' => 'Chaussures',
                'Bijoux, montre' => 'Bijoux, montre',
                'Art, antiquites' => 'Art, antiquites',
                'Pièces, accessoires auto ou moto' => 'Pièces, accessoires auto ou moto',
                'Cosmetiques, cremes, parfums' => 'Cosmetiques, cremes, parfums',
                'Vins et boissons' => 'Vins et boissons',
                'Nourriture' => 'Nourriture',
                'Céramiques, verres, vaisselle' => 'Céramiques, verres, vaisselle',
                'Jouets, figurines' => 'Jouets, figurines',
                'Livres, BD, revues' => 'Livres, BD, revues',
                'Bébé, puericulture' => 'Bébé, puericulture',
                'Equipements electroniques' => 'Equipements electroniques',
                'Téléphone mobile' => 'Téléphone mobile',
                'Cartes, coupons, tickets' => 'Cartes, coupons, tickets',
                'Outils de bricolage' => 'Outils de bricolage',
                'Médicaments' => 'Médicaments',
                'Documents' => 'Documents'), 'preferred_choices' => array('baz'),));
        $builder->add('poids');
        $builder->add('description', 'textarea');
    }

    public function getName()
    {
        return 'devis';
    }
}