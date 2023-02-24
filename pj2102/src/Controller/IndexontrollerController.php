<?php

namespace App\Controller;

use App\Entity\Usertable31;
use App\Form\UserbasicdataType;
use App\Repository\Usertable31Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexontrollerController extends AbstractController
{
    /**
     * @Route("/indexontroller", name="app_indexontroller")
     */
    public function index(Request $request): Response
    {
        $em=$this->getDoctrine()->getManager();
        $user=new Usertable31();

        $form=$this->createForm(UserbasicdataType::class,$user);
        $form->handleRequest($request);

        dump($user);

if ($form->isSubmitted()) {
      $em->persist($user);
      $em->flush();

      $this->redirectToRoute('app_indexontroller');

     

      $em1=$this->getDoctrine()->getRepository(Usertable31::class)->findAll();
      return $this->render('indexontroller/added.html.twig',[ 'controller_name' => 'IndexontrollerController','users'=>$em1]);
}


       



        return $this->render('indexontroller/index.html.twig', [
            'controller_name' => 'IndexontrollerController','form'=>$form->createView(),
        ]);
    }

}
