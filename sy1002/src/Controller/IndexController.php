<?php

namespace App\Controller;

use App\Entity\Userdepartments;
use App\Entity\Usertable21;
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
        $em= $this->getDoctrine()->getManager();
        $userbasicdata= new Usertable21();

        $form=$this->createForm(BasicdataType::class,$userbasicdata);
        $form->handleRequest($request);
        $userdatas= new Userdepartments();
        for ($i=0; $i < 10; $i++) { 
            $userdatas->setUserdepartmenttitle('department'.$i);

            if ($i%2==0) {
                $userdatas->setUserdepartmentstatus(true);
            }
            else{
                $userdatas->setUserdepartmentstatus(false);
            }
        }


        if ($form->isSubmitted()) {

            $userdatas->setUserdepartmentstatus($form->get('department')->getData());


            $em->persist($userdatas);
            $em->persist($userbasicdata);
            $em->flush();
            
            return $this->redirectToRoute('app_index');
        }

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }



    //  /**
    //  * @Route("/department", name="app_index2")
    //  */
    // public function department(): Response
    // {
    //     $em= $this->getDoctrine()->getManager();
    //     $userdatas= new Userdepartments();

    //     for ($i=0; $i < 10; $i++) { 
    //         $userdatas->setUserdepartmenttitle('department'.$i);

    //         if ($i%2==0) {
    //             $userdatas->setUserdepartmenttitle(true);
    //         }
    //         else{
    //             $userdatas->setUserdepartmenttitle(false);
    //         }
    //     }
    




    //     return $this->render('index/index.html.twig', [
    //         'controller_name' => 'IndexController'
    //     ]);
    // }
}
