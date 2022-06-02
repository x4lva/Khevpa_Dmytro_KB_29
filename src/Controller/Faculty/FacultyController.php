<?php

namespace App\Controller\Faculty;

use App\Entity\Faculty;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/faculty", name="faculty")
 */
class FacultyController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    /**
     * FacultyController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name=".index")
     */
    public function index()
    {
        $faculties = $this->entityManager->getRepository(Faculty::class)->findBy(['active' => true]);

        return $this->render('faculty/index.html.twig', [
            'faculties' => $faculties
        ]);
    }

}