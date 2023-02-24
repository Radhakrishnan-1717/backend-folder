<?php

namespace App\Controller;

use App\Entity\Usertable33;
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

       $em=$this->getDoctrine()->getManager();


        $user = new Usertable33();


        $form=$this->createForm(UserbasicdataType::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em->persist($user);
            $em->flush();



            $em1=$this->getDoctrine()->getRepository(Usertable33::class)->findAll();

            return $this->render('index/display.html.twig', [
                'controller_name' => 'IndexController','data'=>$em1
            ]);
        }

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }


    // edit id




  















}
