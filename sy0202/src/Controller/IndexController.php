<?php

namespace App\Controller;

use App\Entity\Userprodata;
use App\Entity\Usertable9;
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
        $em = $this->getDoctrine()->getManager();
        $data = new Usertable9();
        $data->setUsername('radhakrishnan');

        $datas = new Userprodata();
        $datas->setUserage("22");

        $data->setUserprodata($datas);

        $datass = new Uservideo();
        $datass->setUservideotitle("title");
        $data->addvideo($datass);
 
        
        $em->persist($data);
        $em->persist($datas);
        $em->persist($datass);
        $em->flush();

        dump($data);




        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
