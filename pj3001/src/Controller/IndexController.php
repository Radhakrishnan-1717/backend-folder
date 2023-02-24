<?php

namespace App\Controller;

use App\Entity\Userpersonaldata;
use App\Entity\Userprofessional;
use App\Entity\Usertable5;
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
        $userdata = new Usertable5();
        $data = $this->getDoctrine()->getManager();
        $userdata->setUsername('radhakrishnan');
        $userdata->setUserage('22');
        $userdata->setUserphonenumber('9791297877');

        $usersdata = new Userprofessional();
        $usersdata->setUserdob("01/09/2000");
        $usersdata->setUserrmaritalstatus('false');

        $userdata->setUserdob($usersdata);

        $userssdata = new Userpersonaldata();
        $userssdata->setUserexp('1 years');
        $userssdata->setUserrole('symfony');

        $userdata->setUserroles($userssdata);

        $data->persist($userdata);
        $data->persist($usersdata);
        $data->persist($userssdata);

        $data->flush();

        dump($userdata);




        $userdata2 = $this->getDoctrine()->getRepository(Usertable5::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','userdatas'=>$userdata2
        ]);
    }
}
