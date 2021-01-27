<?php

namespace App\Controller;

use App\Entity\AcademicTraining;
use App\Entity\Contact;
use App\Entity\Experience;
use App\Entity\PersonalInformation;
use App\Entity\Profile;
use App\Form\AcademicType;
use App\Form\ContactType;
use App\Form\ExperienceType;
use App\Form\PersonalInfoType;
use App\Form\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    /**
     * @Route("/experience", name="Experience")
     */
    public function index(Request $request): Response
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $experience->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($experience);
            $em->flush();
            return $this->redirectToRoute('register');
        }
        return $this->render('experience/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/contact", name="Contact")
     */
    public function contacts(Request $request){
      $contact = new Contact();
      $form = $this->createForm(ContactType::class, $contact);
      $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $contact->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('Profile');
        }
        return $this->render('experience/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/profile", name="Profile")
     */
    public function profiles(Request $request){
        $profile = new Profile();
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $profile->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();
            return $this->redirectToRoute('Academic');
        }
        return $this->render('experience/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/academic", name="Academic")
     */
    public function academics(Request $request){
        $academic = new AcademicTraining();
        $form = $this->createForm(AcademicType::class, $academic);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $academic->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($academic);
            $em->flush();
            return $this->redirectToRoute('Experience');
        }
        return $this->render('experience/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/personalinfo", name="PersonalInfo")
     */
    public function personalinfos(Request $request){
        $personalinfo = new PersonalInformation();
        $form = $this->createForm(PersonalInfoType::class, $personalinfo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->getUser();
            $personalinfo->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($personalinfo);
            $em->flush();
            return $this->redirectToRoute('Contact');
        }
        return $this->render('experience/index.html.twig', [
            'form' => $form->createView()
        ]);
    }




}
