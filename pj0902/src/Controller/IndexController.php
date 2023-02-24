<?php

namespace App\Controller;

use App\Entity\Usertable17;
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
        $entity = $this->getDoctrine()->getManager();
        $customer = new Usertable17();

        $form = $this->createForm(BasicdataType::class, $customer);
        $form->handleRequest($request);
        // dump($form);
        // $entity->persist($customer);
        // $entity->flush();
        if ($form->isSubmitted()) {
        $entity->persist($customer);
        $entity->flush();
            return $this->redirectToRoute('app_index');
        }
        // if($form->get('terms')->getData()){
        //     $this->addFlash('error','accept the conditions');
        // }



        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
