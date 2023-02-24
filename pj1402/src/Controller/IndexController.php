<?php

namespace App\Controller;

use App\Entity\Studentdepartment;
use App\Entity\Usertable26;
use App\Form\BasicdataType;
use App\Repository\StudentdepartmentRepository;
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

        $user=new Usertable26();

        $form=$this->createForm(BasicdataType::class,$user);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid() &&$form->isEmpty()) {

        // $user->setStudentdepartment($form->get('studentdepartment')->getData());
        $emt=$this->getDoctrine()->getRepository(Studentdepartment::class)->find($form->get('studentdepartment')->getData());
 
        $user->setStudentdepartment($emt);

        // if ($form->get('Studentmailid')->getData()) {
                 // $em->persist($user);
        // $em->flush();
            // $this->addFlash('success','correct data');
        // }
        // else{
        //     $this->addFlash('error','wrong data');
        // }
      
          return $this->redirectToRoute('app_index');
         
        }



        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }



     /**
     * @Route("/school", name="app_index_2")
     */
    public function school(): Response
    {
        $em=$this->getDoctrine()->getManager();

       

        for ($i=0; $i <10 ; $i++) { 
            $dep=new Studentdepartment();

            $dep->setStudentdepname('dep - '.$i);

            if ($i%2==0) {
                $dep->setStudentdepstatus(true);
            }
            else{
                $dep->setStudentdepstatus(false);
            }

// $em->persist($dep);
        }
        // $em->flush();




       return new Response ('added');
       
    }
}
