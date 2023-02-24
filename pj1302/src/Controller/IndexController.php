<?php

namespace App\Controller;

use App\Entity\Userdepartment;
use App\Entity\Usertable23;
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
        $user = new Usertable23();

        $form = $this->createForm(BasicdataType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user->setUserdepartment($form->get('Department')->getData());
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_index');
        }
        dump($form->get('Department')->getData());




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/department", name="app_index_2")
     */
    public function department(): Response
    {
        $emg = $this->getDoctrine()->getManager();
        
        for ($i=0;$i<10;$i++) {
            $userdep = new Userdepartment();
            $userdep->setUserdepartmenttitle('Department -'.$i);

            if ($i%2 == 0) 
            {
                $userdep->setUserdepartmentstatus(true);
            } 

            else {
                $userdep->setUserdepartmentstatus(false);
            }

            $emg->persist($userdep);
        }   
        
        $emg->flush();


         


         return new Response('add');

    }
  
}