<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Entity\User;
use App\Entity\Users;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $user->setPassword($passwordEncoder->encodePassword($user,$form['password']->getData()));
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', User::REGISTRO_EXITOSO);
            return $this->redirectToRoute('app_login');
        };
        return $this->render('register/index.html.twig', [
            //'controller_name' => 'RegisterController',
            'formulario' => $form->createView()
        ]);
    }
    /**
     * @Route("/view_user/{id}", name="view_user")
     */
    public function view_user($id){
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        return $this->render('register/view_user.html.twig',['user'=>$user]);
    }

    /**
     * @Route("/theuser", name="TheUser")
     */
    public function theuser(){
        $em=$this->getDoctrine()->getManager();
        $user = $this->getUser();
        $experience =$em->getRepository(Experience::class)->findBy(['user'=>$user]);
        return $this->render('register/theuser.html.twig',['experience'=>$experience]);

    }



}
