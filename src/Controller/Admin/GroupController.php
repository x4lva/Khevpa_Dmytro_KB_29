<?php

namespace App\Controller\Admin;

use App\Entity\Faculty;
use App\Entity\Group;
use App\Form\FacultyType;
use App\Form\GroupType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/group", name="admin.group")
 */
class GroupController extends AbstractController
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
        $items = $this->entityManager->getRepository(Group::class)->findBy(['active' => true]);

        $pagination = $this->paginator->paginate(
            $items,
            $request->query->getInt('page', 1),
            10
        );

        $pagination->setCustomParameters(['size' => 'small']);

        return $this->render('admin/group/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route("/create", name=".create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response {
        $group = new Group();

        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $group = $form->getData();

            $this->entityManager->persist($group);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.group.list');
        }

        return $this->render('admin/group/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name=".edit")
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request, $id): Response {
        $group = $this->entityManager->getRepository(Group::class)->find($id);

        $form = $this->createForm(GroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $group = $form->getData();

            $this->entityManager->persist($group);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin.group.list');
        }

        return $this->render('admin/group/form.html.twig', [
            'form' => $form->createView(),
            'group' => $group
        ]);
    }

    /**
     * @Route("/delete/{id}", name=".delete")
     */
    public function delete($id): Response
    {
        $faculty = $this->entityManager->getRepository(Group::class)->find($id);
        $faculty->setActive(false);

        $this->entityManager->persist($faculty);
        $this->entityManager->flush();

        return $this->redirectToRoute('admin.group.list');
    }
}
