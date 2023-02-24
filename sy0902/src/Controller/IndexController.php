<?php

namespace App\Controller;

use App\Entity\Usertable18;
use App\Form\BasicdataType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = new Usertable18();

        $form = $this->createForm(BasicdataType::class, $user);
        $form->handleRequest($request);

 
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $file = $form->get('userphoto')->getData();
            $filename = $form->get('username')->getData() . '.' . $file->guessExtension();
            // dump($filename);
            $file->move(
               $this->getParameter('image_directory'),
                $filename
            );
            $user->setUserphoto($filename);
            // $em->persist($user);
            // $em->flush();
            }
            dump($user);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form' => $form->createView()
        ]);
    }
}