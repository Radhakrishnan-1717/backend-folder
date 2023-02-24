<?php

namespace App\Controller;

use App\Entity\Usertable34;
use App\Form\Usertable34Type;
use App\Repository\Usertable34Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/usertable34")
 */
class Usertable34Controller extends AbstractController
{
    /**
     * @Route("/", name="app_usertable34_index", methods={"GET"})
     */
    public function index(Usertable34Repository $usertable34Repository): Response
    {
        return $this->render('usertable34/index.html.twig', [
            'usertable34s' => $usertable34Repository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_usertable34_new", methods={"GET", "POST"})
     */
    public function new(Request $request, Usertable34Repository $usertable34Repository): Response
    {
        $usertable34 = new Usertable34();
        $form = $this->createForm(Usertable34Type::class, $usertable34);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usertable34Repository->add($usertable34, true);

            return $this->redirectToRoute('app_usertable34_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usertable34/new.html.twig', [
            'usertable34' => $usertable34,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_usertable34_show", methods={"GET"})
     */
    public function show(Usertable34 $usertable34): Response
    {
        return $this->render('usertable34/show.html.twig', [
            'usertable34' => $usertable34,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_usertable34_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Usertable34 $usertable34, Usertable34Repository $usertable34Repository): Response
    {
        $form = $this->createForm(Usertable34Type::class, $usertable34);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usertable34Repository->add($usertable34, true);

            return $this->redirectToRoute('app_usertable34_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('usertable34/edit.html.twig', [
            'usertable34' => $usertable34,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_usertable34_delete", methods={"POST"})
     */
    public function delete(Request $request, Usertable34 $usertable34, Usertable34Repository $usertable34Repository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usertable34->getId(), $request->request->get('_token'))) {
            $usertable34Repository->remove($usertable34, true);
        }

        return $this->redirectToRoute('app_usertable34_index', [], Response::HTTP_SEE_OTHER);
    }
}
