<?php

namespace App\Controller;

use App\Entity\Usertable2;
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
        $user = new Usertable2();
        $user->setUsername('rocky');
        $user->setUserphonenumber('9791297877');
        $user->setUserage(21);
        $user->setUserlocation('salem');
        $user->setUsermail('radha123@gmail.com');
        $em->persist($user);
        $em->flush();

        // update using find return object
        // $ems = $this->getDoctrine()->getRepository(Usertable2::class)->find(8);
        // $ems->setUsername('vijay');
        // $em->persist($user);
        // $em->flush();
        

        // remove
        // $ems = $this->getDoctrine()->getRepository(Usertable2::class)->find(10);
        // $em->remove($ems);
        // $em->flush();


//          findby using for loop
//         $em3 = $this->getDoctrine()->getRepository(Usertable2::class)->findBy(['username'=>'vijay']);
// dump($em3);

         // findoneby
          $em4 = $this->getDoctrine()->getRepository(Usertable2::class)->findOneBy(['id'=>6]);
        dump($em4);

        $em2 = $this->getDoctrine()->getRepository(Usertable2::class) ->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em2,'userss'=>$em4
        ]);
    }
}
// ,'users'=>$em3,'userss'=>$em4