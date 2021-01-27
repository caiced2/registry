<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Entity\User;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    /**
     * @Route("/data", name="data")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        //$user= $em->getRepository(User::class)->findAll();
        $query= $em->getRepository(User::class)->search_users();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );
        return $this->render('data/index.html.twig', [
            'pagination' => $pagination
        ]);
    }
    /**
     * @Route("/expe", name="expe")
     */
    public function expe(PaginatorInterface $paginator, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        //$user= $em->getRepository(Experience::class)->findAll();
        $query= $em->getRepository(Experience::class)->findAll();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/

        );

        return $this->render('expe/index.html.twig', [
            'pagination' => $pagination
        ]);
    }
}
