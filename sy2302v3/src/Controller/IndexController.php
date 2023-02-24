<?php

namespace App\Controller;

use App\Entity\Usertable35;
use App\Form\UserbasicdataType;
use App\Repository\Usertable35Repository;
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

        $user=new Usertable35();

        $form=$this->createForm(UserbasicdataType::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em->persist($user);
            $em->flush();

            $em1=$this->getDoctrine()->getRepository(Usertable35::class)->findAll();
            return $this->render('display.html.twig', [
                'controller_name' => 'IndexController','users'=>$em1]);    
                }

            
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }




 /**
     * @Route("/{id}/view", name="app_view",methods={"GET", "POST"})
     */
    public function edit(Request $request, Usertable35 $usertable35, Usertable35Repository $usertable35Repository)
    {
        $form = $this->createForm(UserbasicdataType::class,$usertable35);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usertable35Repository->add($usertable35, true);




            $em1=$this->getDoctrine()->getRepository(Usertable35::class)->findAll();
            return $this->render('display.html.twig', [
                'controller_name' => 'IndexController','users'=>$em1]);    

        }

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);

    }

/**
     * @Route("/ddd", name="app_ddd")
     */
public function ddd(){


    $em1=$this->getDoctrine()->getRepository(Usertable35::class)->findAll();
    return $this->render('display.html.twig', [
        'controller_name' => 'IndexController','users'=>$em1]); 
}



/**
     * @Route("/{id}", name="app_delete",methods={"POST"})
     */

public function delete(Request $request, Usertable35 $usertable35 ,Usertable35Repository $usertable35Repository)
{

    if ($this->isCsrfTokenValid('delete'.$usertable35->getId(), $request->request->get('_token'))) {
        $usertable35Repository->remove($usertable35,true);

                
        return $this->redirectToRoute('app_ddd', [], Response::HTTP_SEE_OTHER);
                }
   
}



}
