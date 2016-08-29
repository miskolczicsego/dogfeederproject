<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="login_form")
     * @Template("security/login.html.twig")
     */
    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
//        $users = $em->getRepository('UserBundle:User')
//            ->findAllOrderedByName();
//        var_dump($users);die;
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

//        var_dump($authenticationUtils);die;

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

//        var_dump($lastUsername);die;

        return
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error' => $error,

            );
    }
}
