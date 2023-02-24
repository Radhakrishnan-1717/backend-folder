<?php

namespace App\Controller;

use App\Entity\Usertable;
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
        $user = new Usertable();
        $user->setUsername('rahakrishnan');
        $user->setUseremailid('rakivj1981@gmail.com');
        $user->setUserphonenumber('9791297877');

        $em->persist($user);
        $em->flush();

        $em2 = $this->getDoctrine()->getRepository(Usertable::class)->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em2
        ]);
    }
}
