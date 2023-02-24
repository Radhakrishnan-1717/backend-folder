<?php

namespace App\Controller;

use App\Entity\Userperdata;
use App\Entity\Userprofdata;
use App\Entity\Usertable20;
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
        $userbasicdata= new Usertable20();

        $form=$this->createForm(BasicdataType::class,$userbasicdata);
        $form->handleRequest($request);

        $userperdata= new Userperdata();
        $userprofdata = new Userprofdata();

        if ($form->isSubmitted()) {
            $userperdata->setUserfathername($form->get('Userfathername')->getData());
            $userperdata->setUsermothername($form->get('Usermothername')->getData());
            $userbasicdata->setUserperdata($userperdata);

            dump($form->get('Userexp')->getData());
            $userprofdata->setUserexp($form->get('Userexp')->getData());
            $userprofdata->setUserrole($form->get('Userrole')->getData());
            $userprofdata->setUserskill($form->get('Userskill')->getData());
            $userbasicdata->setUserprofdata($userprofdata);


            dump($userbasicdata);
            
            $em->persist($userbasicdata);
            $em->persist($userperdata);
            $em->persist($userprofdata);
            $em->flush();
        }




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
