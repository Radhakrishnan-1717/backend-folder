<?php

namespace App\Controller;

use App\Entity\Studentschool;
use App\Entity\Usertable24;
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
        $student=new Usertable24();

        $form=$this->createForm(BasicdataType::class,$student);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $student->setStudentschool($form->get('Schoolname')->getData());
            $em->persist($student);
            $em->flush();

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
        $em2=$this->getDoctrine()->getManager();


        for ($i=0; $i < 10; $i++) { 
            $school=new Studentschool();

            $school->setSchoolname('school'.$i);

            if ($i%2==0) {
                $school->setSchoolstatus(true);
            }
            else{
                $school->setSchoolstatus(false);
            }
            $em2->persist($school);
           
        }
        $em2->flush();
        



        return new Response('added');


      
    }
}
