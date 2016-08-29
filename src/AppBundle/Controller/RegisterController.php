<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Form\RegistrationType;

class RegisterController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {

        $date = new \DateTime('NOW');
        $date->format('Y-m-d H:i');
        $user = new User();

        $user->setFirstname('Csegő');
        $user->setLastname('Miskolczi');
        $user->setCity('Debrecen');
        $user->setEmail('miskolczicsego@gmail.com');
        $user->setUsername('csigusz600');
        $user->setAddress('Ispotaly utca 5');
        $user->setComment('próba');
        $user->setPhone('231232132');
        $user->setRegdate($date);



        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //save the user data into database
            $user = $form->getData();
//            $plainPassword = $user->getPassword();
//            $encoder = $this->container->get('security.password_encoder');
//            $encoded = $encoder->encodePassword($user, $plainPassword);
//            $user->setPassword($encoded);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('success');
        }

        return $this->render('register/form.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
