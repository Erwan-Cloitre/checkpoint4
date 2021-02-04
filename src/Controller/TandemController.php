<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TandemController extends AbstractController
{
    /**
     * @Route("/tandem-bike", name="tandem-bike")
     * @param Request $request
     * @return Response
     */
    public function tandem(Request $request): Response
    {
        // Create a new Category Object
        $reservation = new Reservation();
        // Create the associated Form
        $form = $this->createForm(ReservationType::class, $reservation);
        // Get data from HTTP request
        $form->handleRequest($request);
        // Was the form submitted ?
        if ($form->isSubmitted()) {
            // Deal with the submitted data
            // Get the Entity Manager
            $entityManager = $this->getDoctrine()->getManager();
            // Persist Category Object
            $entityManager->persist($reservation);
            // Flush the persisted object
            $entityManager->flush();
            // Finally redirect to categories list
            return $this->redirectToRoute('home');
        }
        // Render the form
        return $this->render('reservation/tandem-bike.html.twig', [
            "reservation" => $form->createView(),
        ]);
    }
}
