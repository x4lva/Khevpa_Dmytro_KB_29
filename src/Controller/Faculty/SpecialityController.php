<?php

namespace App\Controller\Faculty;

use App\Entity\Speciality;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/speciality", name="speciality")
 */
class SpecialityController extends AbstractController
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
        $specialities = $this->entityManager->getRepository(Speciality::class)->findBy(['active' => true]);

        return $this->render('speciality/index.html.twig', [
            'specialities' => $specialities
        ]);
    }
}