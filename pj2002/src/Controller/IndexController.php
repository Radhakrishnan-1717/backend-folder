<?php

namespace App\Controller;

use App\Entity\Usertable29;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {

        $em=$this->getDoctrine()->getManager();

        $user=new Usertable29();
        $user->setUsername('radhakrishnan');
        $user->setUseremailid('radhakrishnan.shanmugam.detrans.io');
        $user->setUserphonenumber('9791297877');

        dump($user);
        
        $em->persist($user);
        $em->flush();

        




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
