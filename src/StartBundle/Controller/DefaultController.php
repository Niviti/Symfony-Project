<?php

namespace StartBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use StartBundle\Entity\Uzytkownicy;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{   
    
    
       /**
         *  @Route("/", name="homepage")
         */
    public function indexAction()
    {      
         return $this->render('StartBundle:Default:index.html.twig');
    }
    
    
    public function mainAction()
    {
          return $this->render('StartBundle:Default:main.html.twig');
    }
    
    
}
