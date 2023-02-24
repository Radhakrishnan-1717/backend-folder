<?php

namespace App\Controller;

use App\Entity\Usercity;
use App\Entity\Usercountrydata;
use App\Entity\Userperdata;
use App\Entity\Userprofdata;
use App\Entity\Userstatedata;
use App\Entity\Usertable19;
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
        $user = new Usertable19();
       

        $form = $this->createForm(BasicdataType::class, $user);
        $form->handleRequest($request);
        $userperdata = new Userperdata();
        $userprofdata = new Userprofdata();
        $usercountry = new Usercountrydata();
        $userstate= new Userstatedata();
        $usercity= new Usercity();

        if($form->isSubmitted())
        {
            $userperdata->setUserfathername($form->get('Userfathername')->getData());
            $userperdata->setUsermothername($form->get('Userfathername')->getData());
            $user->setUserperdata($userperdata);
          
           
            $userprofdata->setUserexp($form->get('Userexp')->getData());
            $userprofdata->setUserrole($form->get('Userrole')->getData());
            $userprofdata->setUserskill($form->get('Userskill')->getData());
            $user->setUserprofdata($userprofdata);

            $usercountry->setUsercounty( $form->get('Usercountry')->getData());
            $user->setUsercountrydata($usercountry);

            $userstate->setUserstate( $form->get('Userstate')->getData());
            $user->setUserstatedata($userstate);

            $usercity->setUsercity(($form->get('Usercity')->getData()));
            $user->setUsercity($usercity);

        }
      
   
       

      
     

        
      

       
      


        // $em->persist($user);
        // $em->persist($user2);
        // $em->persist($user3);
        // $em->persist($user4);
        // $em->persist($user5);
        // $em->persist($user6);

        // $em->flush();

        dump($user);







        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','form'=>$form->createView()
        ]);
    }
}
