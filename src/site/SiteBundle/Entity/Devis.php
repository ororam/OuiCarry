<?php
// src/site/SiteBundle/Entity/Devis.php

namespace site\SiteBundle\Entity;

class Devis
{
    protected $nom;

    protected $email;

    protected $type;

    protected $poids;

    protected $depart;

    protected $destination;

    protected $description;

    protected $valeur;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPoids()
    {
        return $this->poids;
    }

    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function getDepart()
    {
        return $this->depart;
    }

    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    public function getValeur()
    {
        return $this->valeur;
    }

    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }
    
}