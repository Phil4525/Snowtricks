<?php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    #[Route('/trick/{id}', name: 'app_trick')]
    public function index(Trick $trick): Response
    {

        return $this->render('trick.html.twig', [
            'trick' => $trick,
        ]);
    }
}
