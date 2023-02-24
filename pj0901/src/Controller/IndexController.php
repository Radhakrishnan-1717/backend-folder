<?php

namespace App\Controller;

use App\Entity\Userdb;
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
        $value = $this->getDoctrine()->getManager();
        $user = new Userdb();
        $user->setUserfirstname('radha');
        $user->setUsersecondname('krishnan');
        $user->setUserlastname('s');
        $user->setUserage(20);
        $user->setUserlocation('salem');

        $value->persist($user);
        $value->flush();

        
        $value2 = $this->getDoctrine()->getRepository(Userdb::class)->find(55);
        // $value2 = $this->getDoctrine()->getRepository(Userdb::class)->findBy(['id'=>2]);
  
  
             // update

        // $value2->setUserfirstname('malli');
        // $value->persist($user);
        // $value->flush();


        // delete
        $value->remove($value2);
        $value->flush();

        $valuem = $this->getDoctrine()->getRepository(Userdb::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','value'=>$valuem
        ]);
    }
}
