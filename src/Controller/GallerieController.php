<?php

namespace App\Controller;

use App\Repository\GallerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GallerieController extends AbstractController
{
    private $entityManager;
    private $prestationsRepository;

    public function __construct(EntityManagerInterface $entityManager, GallerieRepository $gallerieRepository)
    {
        $this->entityManager = $entityManager;
        $this->gallerieRepository = $gallerieRepository;
    }

    #[Route('/gallerie', name: 'app_gallerie')]
    public function index(): Response
    {
        $imgs = $this->gallerieRepository->findAllImg();
        // dd($imgs);
        return $this->render('gallerie/index.html.twig', [
            'imgs' => $imgs,
        ]);
    }
}
