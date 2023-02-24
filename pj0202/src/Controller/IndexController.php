<?php

namespace App\Controller;

use App\Entity\Userprodata;
use App\Entity\Usertable8;
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
        $data = new Usertable8();
        $data->setUsername('radhakrishnan');
        $data->setUserage(22);

        $datas = new Userprodata();
        $datas->setUserskill('symfony');

        $data->setUserprodata($datas);
        for ($i = 1; $i < 4;$i++){
        $datass = new Uservideo();
        $datass->setUservideotitle('title'.$i);
        $data->addUservideo($datass);
        $em->persist($datass);
    }
        $em->persist($data);
        $em->persist($datas);
      
        $em->flush();
        dump($data);



        $ems = $this->getDoctrine()->getRepository(Usertable8::class)->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','users'=>$ems
        ]);
    }
}
