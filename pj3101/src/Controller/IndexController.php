<?php

namespace App\Controller;

use App\Entity\Customerpersdata;
use App\Entity\Customerprofdata;
use App\Entity\Usertable7;
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
        $data = $this->getDoctrine()->getManager();
        $customerdata = new Usertable7();
        $customerdata->setCustomername('rocky');
        $customerdata->setCustomerage('22');
        $customerdata->setCustomernumber('9791297877');
        $customerdata->setCustomergender('male');

        $customerdatas = new Customerpersdata();
        $customerdatas->setCustomerrole('developer');

        $customerdata->setCustomerpersdata($customerdatas);

        $customerdatass = new Customerprofdata();
        $customerdatass->setCustomermaritalstatus('single');
        $customerdatass->setCustomerdob('01-09-2000');

        $customerdata->setCustomerprofdata($customerdatass);


        $data->persist($customerdata);
        $data->persist($customerdatas);
        $data->persist($customerdatass);

        $data->flush();

        dump($customerdata);

        $em = $this->getDoctrine()->getRepository(Usertable7::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em
        ]);
    }


    // update

     /**
     * @Route("/update", name="app_update")
     */
    public function update(): Response
    {
        $data = $this->getDoctrine()->getManager();
        $customerdata = new Usertable7();
        $customerdata->setCustomername('rocky');
        $customerdata->setCustomerage('22');
        $customerdata->setCustomernumber('9791297877');
        $customerdata->setCustomergender('male');

        $customerdatas = new Customerpersdata();
        $customerdatas->setCustomerrole('developer');

        $customerdata->setCustomerpersdata($customerdatas);

        $customerdatass = new Customerprofdata();
        $customerdatass->setCustomermaritalstatus('single');
        $customerdatass->setCustomerdob('01-09-2000');

        $customerdata->setCustomerprofdata($customerdatass);


        $data->persist($customerdata);
        $data->persist($customerdatas);
        $data->persist($customerdatass);

        $data->flush();

        // dump($customerdata);
        $ems = $this->getDoctrine()->getRepository(Usertable7::class)->find(3);
        $ems->setCustomername('radhakrishnan');
        $ems->setCustomerage('24');
        $data->persist($customerdata);
        $data->flush();
        dump($ems);


        $em = $this->getDoctrine()->getRepository(Usertable7::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em 
        ]);
    }



    // remove
     /**
     * @Route("/remove", name="app_remove")
     */
    public function remove(): Response
    {
        $data = $this->getDoctrine()->getManager();
        $customerdata = new Usertable7();
        $customerdata->setCustomername('rocky');
        $customerdata->setCustomerage('22');
        $customerdata->setCustomernumber('9791297877');
        $customerdata->setCustomergender('male');

        $customerdatas = new Customerpersdata();
        $customerdatas->setCustomerrole('developer');

        $customerdata->setCustomerpersdata($customerdatas);

        $customerdatass = new Customerprofdata();
        $customerdatass->setCustomermaritalstatus('single');
        $customerdatass->setCustomerdob('01-09-2000');

        $customerdata->setCustomerprofdata($customerdatass);


        $data->persist($customerdata);
        $data->persist($customerdatas);
        $data->persist($customerdatass);

        $data->flush();

        // dump($customerdata);
        $ems = $this->getDoctrine()->getRepository(Usertable7::class)->find(1);
     $data->remove($ems);
        $data->flush();
        dump($ems);


        $em = $this->getDoctrine()->getRepository(Usertable7::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$em 
        ]);
    }
}
