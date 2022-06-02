<?php

namespace App\Controller\Admin;

use App\Entity\Group;
use App\Entity\Speciality;
use App\Entity\Student;
use App\Form\GroupType;
use App\Form\StudentType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/student", name="admin.student")
 */
class StudentController extends AbstractController
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
     * @return Response
     */
    public function index(Request $request): Response {
        $items = $this->entityManager->getRepository(Student::class)->findBy(['active' => true]);

        $pagination = $this->paginator->paginate(
            $items,
            $request->query->getInt('page', 1),
            10
        );

        $pagination->setCustomParameters(['size' => 'small']);

        return $this->render('admin/student/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/create", name=".create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response {
        $student = new Student();

        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $student = $form->getData();

            $this->entityManager->persist($student);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.student.list');
        }

        return $this->render('admin/student/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name=".delete")
     */
    public function delete($id): Response
    {
        $faculty = $this->entityManager->getRepository(Student::class)->find($id);
        $faculty->setActive(false);

        $this->entityManager->persist($faculty);
        $this->entityManager->flush();

        return $this->redirectToRoute('admin.student.list');
    }

    /**
     * @Route("/edit/{id}", name=".edit")
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, $id): Response {
        $student = $this->entityManager->getRepository(Student::class)->find($id);

        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $student = $form->getData();

            $this->entityManager->persist($student);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.student.list');
        }

        return $this->render('admin/student/form.html.twig', [
            'form' => $form->createView(),
            'student' => $student
        ]);
    }
}
