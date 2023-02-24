<?php

namespace App\Controller;

use App\Entity\Usertable12;
use App\Form\UserbasicformType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $users = new Usertable12();
        $users->setUserage('22');
        $users->setUsername('rocky');
        $users->setUserphonenumber('9791297877');

        $em->persist($users);
        $em->flush();
        dump($users);

        $em2 = $this->getDoctrine()->getRepository(Usertable12::class)->findAll();




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            // 'table'=>$em2
        ]);
    }


       /**
     * @Route("/display", name="app_display")
     */
    public function display(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable12();
        // $user->setUserage('22');
        // $user->setUsername('radha');
        // $user->setUserphonenumber('9791297877');
        // $em->persist($user);
        // $em->flush();

        $form = $this->createForm(UserbasicformType::class, $user);
        $form->handleRequest($request);
        dump($form);


        return $this->render('display.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
