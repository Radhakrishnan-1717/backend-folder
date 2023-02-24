<?php

namespace App\Controller;

use App\Entity\Usertable14;
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
        $table = $this->getDoctrine()->getManager();
        $customer = new Usertable14();


        $form = $this->createForm(BasicdataType::class, $customer);
        $form->handleRequest($request);
        dump($customer);
        if ($form->isSubmitted() && $form->isValid()) {
            $table->persist($customer);
            $table->flush();
        }
     
      




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
