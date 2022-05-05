<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("inscription", name="security_registration")
     */
     
   public function registraion(Request $request, ManagerRegistry $manager, UserPasswordEncoderInterface $encoder) {
       $user = new User();

       $form = $this->createForm(RegistrationType::class, $user);

       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()) {
         $hash = $encoder->encodePassword($user, $user->getPassword());
         $user->setPassword($hash);        
         $manager->getManager()->persist($user);
         $manager->getManager()->flush();

         return $this->redirectToRoute('security_login');


    }

         return $this->render('security/registration.html.twig', [
              'form' => $form->createView()
         ]);

   }
   /**
    * login function
    * @Route("connexion", name="security_login")
    * @return void
    */
   public function login() {
     return $this->render('security/login.html.twig');
   }
}
