<?php

namespace App\Controller\Group;

use App\Entity\Group;
use App\Entity\Speciality;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/group", name="group")
 */
class GroupController extends AbstractController
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
        $groups = $this->entityManager->getRepository(Group::class)->findBy(['active' => true]);

        return $this->render('group/index.html.twig', [
            'groups' => $groups
        ]);
    }
}