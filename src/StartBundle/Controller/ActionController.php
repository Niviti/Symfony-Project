<?php 

namespace StartBundle\Controller;


use StartBundle\Entity\Uzytkownicy;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ActionController extends Controller
{   
    
      /**
      *  @Route("/new", name="action")
      */
    public function creatAction()
    {   
        $Uzytkownicy = new Uzytkownicy();
        $Uzytkownicy->setLogin('Wojtek');
        $Uzytkownicy->setPassword('Kaszanka');
        $Uzytkownicy->setEmail('Tutuś@o2.pl');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($Uzytkownicy);
        $em->flush();
        
        return new Response('<html><body>Genus created!</body></html>');
    }
    
    
}
