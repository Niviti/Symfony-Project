<?php
namespace StartBundle\Controller;


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

    return $this->render(
        'StartBundle:Default:login.html.twig',
        array(
            // nazwa użytkownika ostatnio wprowadzona przez aktualnego użytkownika
            'last_username' => $lastUsername,
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
    
       
            /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new\Exception('Trolololo walcz dalej');
    }
    
}
