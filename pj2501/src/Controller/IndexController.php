<?php

namespace App\Controller;

use App\Entity\Usertable3;
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
        $table = $this->getDoctrine()->getManager();
        $user = new Usertable3();
        $user->setUsername('radhakrishnan');
        $user->setUserphonenumber('9791297877');
        $user->setUserplace('bangalore');
        $user->setUserage('21');
        $table->persist($user);
        $table->flush();



        // delete

        // $tables1 = $this->getDoctrine()->getRepository(Usertable3::class)->find(8);
        // $table->remove($tables1);
        // $table->flush();

        // findby
        // $tables2=$this->getDoctrine()->getRepository(Usertable3::class)->findBy(['username'=>'krishnan']);

// findoneby
        // $tables3 = $this->getDoctrine()->getRepository(Usertable3::class)->findOneBy(['id' =>1]);


        $table2 = $this->getDoctrine()->getRepository(Usertable3::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','user'=>$table2
        ]);
    }

// 'userss'=>$tables2,'use'=>$tables3
    
    /**
     * @Route("/update", name="app_index_update")
     */
    public function update(): Response
    {       
        $table = $this->getDoctrine()->getManager();
        $user = new Usertable3();
        $user->setUsername('radhakrishnan');
        $user->setUserphonenumber('9791297877');
        $user->setUserplace('bangalore');
        $user->setUserage('21');
        $table->persist($user);
        $table->flush();
        // update
        $tables = $this->getDoctrine()->getRepository(Usertable3::class)->find(2);
        $tables->setUsername('radha');
        $table->persist($user);
        $table->flush();
        dump($tables);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','users'=>$tables
        ]);
    }


        /**
     * @Route("/update", name="app_index_update")
     */
    public function remove(): Response
    {
        $table = $this->getDoctrine()->getManager();
        $user = new Usertable3();
        $user->setUsername('radhakrishnan');
        $user->setUserphonenumber('9791297877');
        $user->setUserplace('bangalore');
        $user->setUserage('21');
        $table->persist($user);
        $table->flush();
        
    }
}
