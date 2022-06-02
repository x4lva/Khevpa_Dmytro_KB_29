<?php

namespace App\Controller\Admin;

use App\Entity\Faculty;
use App\Form\FacultyType;
use App\Repository\FacultyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/faculty", name="admin.faculty")
 */
class FacultyController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private PaginatorInterface $paginator;

    /**
     * StudentController constructor.
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
        $items = $this->entityManager->getRepository(Faculty::class)->findBy(['active' => true]);

        $pagination = $this->paginator->paginate(
            $items,
            $request->query->getInt('page', 1), /*page number*/
            10
        );

        $pagination->setCustomParameters(['size' => 'small']);

        return $this->render('admin/faculty/index.html.twig', [
            'pagination' => $pagination,
            'span_class' => 'whatever',
        ]);
    }

    /**
     * @Route("/delete/{id}", name=".delete")
     */
    public function delete($id): Response
    {
        $faculty = $this->entityManager->getRepository(Faculty::class)->find($id);
        $faculty->setActive(false);

        $this->entityManager->persist($faculty);
        $this->entityManager->flush();

        return $this->redirectToRoute('admin.faculty.list');
    }

    /**
     * @Route("/create", name=".create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response {
        $faculty = new Faculty();

        $form = $this->createForm(FacultyType::class, $faculty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $faculty = $form->getData();

            $this->entityManager->persist($faculty);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.faculty.list');
        }

        return $this->render('admin/faculty/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name=".edit")
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, $id): Response {
        $faculty = $this->entityManager->getRepository(Faculty::class)->find($id);

        $form = $this->createForm(FacultyType::class, $faculty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $faculty = $form->getData();

            $this->entityManager->persist($faculty);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.faculty.list');
        }

        return $this->render('admin/faculty/form.html.twig', [
            'form' => $form->createView(),
            'faculty' => $faculty
        ]);
    }
}
