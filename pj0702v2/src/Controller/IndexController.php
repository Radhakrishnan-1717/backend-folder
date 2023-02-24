<?php

namespace App\Controller;

use App\Entity\Usertable15;
use App\Form\BasicdataType;
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
        $em=$this->getDoctrine()->getManager();
        $randomuser = new Usertable15();

        $form = $this->createForm(BasicdataType::class, $randomuser);
        $form->handleRequest($request);
        $em->persist($randomuser);
        $em->flush();

        
        // return $this->redirectToRoute('app_index');




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView(),
        ]);
    }
}
