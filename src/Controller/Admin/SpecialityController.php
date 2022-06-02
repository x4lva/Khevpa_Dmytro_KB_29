<?php

namespace App\Controller\Admin;

use App\Entity\Speciality;
use App\Form\SpecialityType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/speciality", name="admin.speciality")
 */
class SpecialityController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private PaginatorInterface $paginator;

    /**
     * SpecialityController constructor.
     * @param EntityManagerInterface $entityManager
     * @param PaginatorInterface $paginator
     */
    public function __construct(EntityManagerInterface $entityManager, PaginatorInterface $paginator)
    {
        $this->entityManager = $entityManager;
        $this->paginator = $paginator;
    }

    /**
     * @Route("/", name=".list")
     */
    public function index(Request $request): Response
    {
        $items = $this->entityManager->getRepository(Speciality::class)->findBy(['active' => true]);

        $pagination = $this->paginator->paginate(
            $items,
            $request->query->getInt('page', 1),
            10
        );

        $pagination->setCustomParameters(['size' => 'small']);

        return $this->render('admin/speciality/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/create", name=".create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response {
        $speciality = new Speciality();

        $form = $this->createForm(SpecialityType::class, $speciality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $speciality = $form->getData();

            $this->entityManager->persist($speciality);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.speciality.list');
        }

        return $this->render('admin/speciality/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name=".edit")
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, $id): Response {
        $speciality = $this->entityManager->getRepository(Speciality::class)->find($id);

        $form = $this->createForm(SpecialityType::class, $speciality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $speciality = $form->getData();

            $this->entityManager->persist($speciality);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.speciality.list');
        }

        return $this->render('admin/speciality/form.html.twig', [
            'form' => $form->createView(),
            'speciality' => $speciality
        ]);
    }

    /**
     * @Route("/delete/{id}", name=".delete")
     */
    public function delete($id): Response
    {
        $speciality = $this->entityManager->getRepository(Speciality::class)->find($id);
        $speciality->setActive(false);

        $this->entityManager->persist($speciality);
        $this->entityManager->flush();

        return $this->redirectToRoute('admin.speciality.list');
    }
}
