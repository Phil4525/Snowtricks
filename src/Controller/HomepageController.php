<?php

namespace App\Controller;

use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(TrickRepository $repository): Response
    {
        $tricks = $repository->findAll();
        rsort($tricks);

        return $this->render('homepage.html.twig', [
            'tricks' => $tricks,
        ]);
    }
}
