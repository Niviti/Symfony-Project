<?php
namespace StartBundle\Controller;

use StartBundle\Form\LoginForm;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/**
 * Description of SecurityController
 *
 * @author Rafał Niewiński
 */
class SecurityController extends Controller {
 
    
    public function loginAction(Request $request)
    {
    $authenticationUtils = $this->get('security.authentication_utils');

    // pobranie błędu logowania, jeśli sie taki pojawił
    $error = $authenticationUtils->getLastAuthenticationError();

    // nazwa użytkownika ostatnio wprowadzona przez aktualnego użytkownika
    $lastUsername = $authenticationUtils->getLastUsername();
    
      $form = $this->createForm(LoginForm::class, [
            '_Login' =>$lastUsername
            
        ]);
    
    
    return $this->render(
        'StartBundle:Default:login.html.twig',
        array(
            // last username entered by the user
             'form' => $form->createView(),
             'error'         => $error,
        )
    );
    }
    
    /**
     * @Route("/login_check", name="login_check")
     */
       public function loginCheckAction()
       {    
       }
    
       
  
    
}
