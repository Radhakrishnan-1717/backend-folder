<?php

namespace App\Controller;

use App\Entity\Userpersonaldata;
use App\Entity\Userprofessionaldata;
use App\Entity\Usertable6;
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
        $userdata = new Usertable6();
        $data = $this->getDoctrine()->getManager();
        $userdata->setUserfirstname('radhakrishnan');
        $userdata->setUserlastname('s');
        $userdata->setUserlocation('bangalore');
        $userdata->setUsergender('male');

        $usersdata = new userprofessionaldata();
        $usersdata->setUserexp('6 month');
        $usersdata->setUserrole('developer');
        $usersdata->setUserskill('javascript');

        $userdata->setUserprofessionaldata($usersdata);


        $userssdata = new Userpersonaldata();
        $userssdata->setUserdob('01-09-2000');
        $userssdata->setUsermaritalstatus('0');
        // dump($userssdata);
        $userdata->setUserpersonaldata($userssdata);

        $data->persist($userdata);
        $data->persist($usersdata);
        $data->persist($userssdata);

        $data->flush();

        dump($userdata);






        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController', 'user'=>$userdata
        ]);
    }
}
