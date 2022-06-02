<?php

namespace App\Form;

use App\Entity\Faculty;
use App\Repository\FacultyRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SpecialityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Назва'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Опис'
            ])
            ->add('code', TextType::class, [
                'label' => 'Код'
            ])
            ->add('marks', CollectionType::class, [
                'entry_type' => MarkType::class,
                'label' => ' ',
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true
            ])
            ->add('faculty', EntityType::class, [
                'class' => Faculty::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('f')->where('f.active = true');
                },
                'choice_label' => 'name',
                'label' => 'Факультет'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Зберегти'
            ])
        ;
    }
}