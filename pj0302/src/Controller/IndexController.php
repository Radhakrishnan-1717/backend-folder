<?php

namespace App\Controller;

use App\Entity\Userproject;
use App\Entity\Usertable10;
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
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable10();
        $user->setUsername('radhakrishnan');
        $user->setUserage('22');
    


        $user2 = new Userproject();
        $user2->setUserprojecttitle('symfony');
        $user2->setUserprojectdesc('create project');
      

        $user->addUserproject($user2);

        $em->persist($user);
        $em->persist($user2);
        $em->flush();

        dump($user);


$em2=$this->getDoctrine()->getRepository(Usertable10::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','table'=>$em2
        ]);
    }
}
