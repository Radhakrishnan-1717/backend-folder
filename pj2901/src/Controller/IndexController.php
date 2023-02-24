<?php

namespace App\Controller;

use App\Entity\Usertable4;
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
        $user = new Usertable4();
        $user->setUsername('rocky');
        $user->setUsernumber('9791297877');
        $user->setUserage('21');
        $user->setUserplace('salem');
        $em->persist($user);
        $em->flush();



        $em2 = $this->getDoctrine()->getRepository(Usertable4::class) ->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em2
        ]);
    }

    /**
     * @Route("/update", name="app_update")
     */
    public function update(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable4();
        $user->setUsername('rocky');
        $user->setUsernumber('9791297877');
        $user->setUserage('21');
        $user->setUserplace('salem');
        $em->persist($user);
        $em->flush();

         $ems = $this->getDoctrine()->getRepository(Usertable4::class)->find(1);
         $ems->setUsername('vijay');
         $em->persist($user);
         $em->flush();

        $em2 = $this->getDoctrine()->getRepository(Usertable4::class) ->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em2
        ]);
    }

    /**
     * @Route("/remove", name="app_remove")
     */
    public function remove(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable4();
        $user->setUsername('rocky');
        $user->setUsernumber('9791297877');
        $user->setUserage('21');
        $user->setUserplace('salem');
        $em->persist($user);
        $em->flush();

         $ems = $this->getDoctrine()->getRepository(Usertable4::class)->find(3);
         $em->remove($ems);
         $em->flush();

        $em2 = $this->getDoctrine()->getRepository(Usertable4::class) ->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em2
        ]);
    }



        /**
     * @Route("/display", name="app_display")
     */
    public function display(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable4();
        $user->setUsername('rocky');
        $user->setUsernumber('9791297877');
        $user->setUserage('21');
        $user->setUserplace('salem');
        $em->persist($user);
        $em->flush();

        $em3 = $this->getDoctrine()->getRepository(Usertable4::class)->findBy(['username'=>'vijay']);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em3
        ]);
    }



           /**
     * @Route("/display1", name="app_display1")
     */
    public function display1(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable4();
        $user->setUsername('rocky');
        $user->setUsernumber('9791297877');
        $user->setUserage('21');
        $user->setUserplace('salem');
        $em->persist($user);
        $em->flush();

        $em4 = $this->getDoctrine()->getRepository(Usertable4::class)->findOneBy(['id'=>1]);
        dump($em4);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em4
        ]);
    }

}
