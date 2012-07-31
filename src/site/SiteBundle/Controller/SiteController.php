<?php

namespace site\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use site\SiteBundle\Entity\Devis;
use site\SiteBundle\Form\DevisType;
use site\SiteBundle\Entity\Contact;
use site\SiteBundle\Form\ContactType;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('siteSiteBundle:Site:index.html.twig');
    }
    public function serviceAction()
    {
        return $this->render('siteSiteBundle:Site:service.html.twig');
    }
    public function agencesAction()
    {
        return $this->render('siteSiteBundle:Site:agences.html.twig');
    }
    public function colis_interditsAction()
    {
        return $this->render('siteSiteBundle:Site:colis_interdits.html.twig');
    }
    public function mentions_legalesAction()
    {
        return $this->render('siteSiteBundle:Site:mentions_legales.html.twig');
    }
    public function contactAction()
    {
    $enquiry = new Contact();
    $form = $this->createForm(new ContactType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);

        if ($form->isValid()) {
        $form = $form->getData();
        $destinataire = 'contact@ouicarry.com';
        $email = $form->getEmail();
        $sujet = '[CONTACT - OuiCarry]: '.$form->getSujet();
        $message = "From: ".$email."\n\n
        Nom: ".$form->getNom()."\n
        Message:\n\n ".$form->getMessage()."\n";
        $headers ="";
        $headers .= "Reply-To: ".$email."\n";
        $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
        mail($destinataire,$sujet,$message,$headers);
        echo "<script>";
        echo "timer = setTimeout(\"document.location.href='home'\", 100)";
        echo "</script>";
        echo "<SCRIPT LANGUAGE=\"JavaScript\">alert('Message envoye avec succes.');</SCRIPT>";
        exit;
        }
    }
    return $this->render('siteSiteBundle:Site:contact.html.twig',
                          array('form' => $form->createView()));
    }
    public function devisAction()
    {
    $enquiry = new Devis();
    $form = $this->createForm(new DevisType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);
        if ($form->isValid()) {
        $form = $form->getData();
        $destinataire = 'contact@ouicarry.com';
        $email = $form->getEmail();
        $sujet = '[DEMANDE DE DEVIS - OuiCarry]: '.$form->getType();
        $message = "From: ".$email."\n\n
        Nom: ".$form->getNom()."\n
        Type: ".$form->getType()."\n
        Poids: ".$form->getPoids()."\n
        Valeur: ".$form->getValeur()."\n
        Ville de départ: ".$form->getDepart()."\n
        Ville de destination: ".$form->getDestination()."\n
        Description: ".$form->getDescription()."\n";
        $headers ="";
        $headers .= "Reply-To: ".$email."\n";
        $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
        mail($destinataire,$sujet,$message,$headers);
        echo "<script>";
        echo "timer = setTimeout(\"document.location.href='home'\", 100)";
        echo "</script>";
        echo "<SCRIPT LANGUAGE=\"JavaScript\">alert('Demande de devis envoyee avec succes.');</SCRIPT>";
        exit;
        }
    }
    return $this->render('siteSiteBundle:Site:devis.html.twig',
                                          array('form' => $form->createView()));
    }

}
