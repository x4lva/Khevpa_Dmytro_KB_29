<?php

namespace App\Form;

use App\Entity\Mark;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MarkType extends AbstractType
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('subject', ChoiceType::class, [
                'label' => 'Предмет',
                'choices' => [
                    'Українська мова' => 'Українська мова',
                    'Українська мова і література' => 'Українська мова і література',
                    'Історія України' => 'України',
                    'Метматика' => 'Метматика',
                    'Біологія' => 'Біологія',
                    'Фізика' => 'Фізика',
                    'Хімія' => 'Хімія',
                    'Англійська мова' => 'Англійська мова',
                    'Іспанська мова' => 'Іспанська мова',
                    'Німецька мова' => 'Німецька мова',
                    'Французька мова' => 'Французька мова',
                ]
            ])
            ->add('min', NumberType::class, [
                'label' => 'Мінімальний бал'
            ])
            ->add('coeff', NumberType::class, [
                'label' => 'Коефіціент'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mark::class,
        ]);
    }
}