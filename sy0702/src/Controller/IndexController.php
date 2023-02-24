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
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable15();

        $form = $this->createForm(BasicdataType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
        if ($form->get('terms')->getData()) 
        {
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'successfully added');
                 return $this->redirectToRoute('app_index');
        }
        else {
            $this->addFlash('error', 'enter wrong data');
                // dump("dddd");
        }
        }
       




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
