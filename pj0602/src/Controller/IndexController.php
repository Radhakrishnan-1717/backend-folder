<?php

namespace App\Controller;

use App\Entity\Usertable13;
use App\Form\UserbasicdataType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable13();

        $form = $this->createForm(UserbasicdataType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();
            $this->addFlash('message', 'data added successfully');
        }






        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form' => $form->createView()
        ]);
    }
}