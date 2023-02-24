<?php

namespace App\Controller;

use App\Entity\Usertable33;
use App\Form\Usertable33Type;
use App\Repository\Usertable33Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/usertable33")
 */
class Usertable33Controller extends AbstractController
{
    /**
     * @Route("/", name="app_usertable33_index", methods={"GET"})
     */
    public function index(Usertable33Repository $usertable33Repository): Response
    {
        return $this->render('usertable33/index.html.twig', [
            'usertable33s' => $usertable33Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_usertable33_new", methods={"GET", "POST"})
     */
    public function new(Request $request, Usertable33Repository $usertable33Repository): Response
    {
        $usertable33 = new Usertable33();
        $form = $this->createForm(Usertable33Type::class, $usertable33);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usertable33Repository->add($usertable33, true);

            return $this->redirectToRoute('app_usertable33_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usertable33/new.html.twig', [
            'usertable33' => $usertable33,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_usertable33_show", methods={"GET"})
     */
    public function show(Usertable33 $usertable33): Response
    {
        return $this->render('usertable33/show.html.twig', [
            'usertable33' => $usertable33,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_usertable33_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Usertable33 $usertable33, Usertable33Repository $usertable33Repository): Response
    {
        $form = $this->createForm(Usertable33Type::class, $usertable33);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usertable33Repository->add($usertable33, true);

            return $this->redirectToRoute('app_usertable33_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usertable33/edit.html.twig', [
            'usertable33' => $usertable33,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_usertable33_delete", methods={"POST"})
     */
    public function delete(Request $request, Usertable33 $usertable33, Usertable33Repository $usertable33Repository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usertable33->getId(), $request->request->get('_token'))) {
            $usertable33Repository->remove($usertable33, true);
        }

        return $this->redirectToRoute('app_usertable33_index', [], Response::HTTP_SEE_OTHER);
    }
}
