<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PrestationsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrestaController extends AbstractController
{
    private $entityManager;
    private $prestationsRepository;

    public function __construct(EntityManagerInterface $entityManager, PrestationsRepository $prestationsRepository)
    {
        $this->entityManager = $entityManager;
        $this->prestationsRepository = $prestationsRepository;
    }

    #[Route('/presta', name: 'app_presta')]
    public function index(): Response
    {
        $prestations = $this->prestationsRepository->findAllWithCategories();
        // dd($prestations);

        return $this->render('presta/index.html.twig', [
            'prestations' => $prestations,
        ]);
    }
    #[Route('/presta/{id}', name: 'detail_presta')]
    public function detail(int $id, PrestationsRepository $prestationsRepository): Response
    {
        $prestation = $prestationsRepository->findPrestaById($id);

        return $this->render('presta/detail.html.twig', [
            'prestation' => $prestation,
        ]);
    }
}
