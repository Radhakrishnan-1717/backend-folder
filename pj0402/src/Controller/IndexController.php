<?php

namespace App\Controller;

use App\Entity\Usertable11;
use App\Entity\Uservideo;
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
        $user = new Usertable11();
        $user->setUserage('22');
        $user->setUsername('radhakrishnan');

        $users = new Uservideo();
        $users->setUservideotitle('video title');

        $user->setUservideo($users);

        $em->persist($user);
        $em->persist($users);
        $em->flush();

        dump($user);


        $em2 = $this->getDoctrine()->getRepository(Usertable11::class)->findAll();




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','table'=>$em2
        ]);
    }
}
