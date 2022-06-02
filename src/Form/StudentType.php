<?php

namespace App\Form;

use App\Entity\Group;
use App\Entity\Student;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Ім\'я'
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Прізвище'
            ])
            ->add('midName', TextType::class, [
                'label' => 'По батькові'
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-Mail'
            ])
            ->add('city', TextType::class, [
                'label' => 'Місто'
            ])
            ->add('dateOfBirth', DateType::class, [
                'label' => 'Дата народження'
            ])
            ->add('familyInfo', TextareaType::class, [
                'label' => 'Інформація про сімю'
            ])
            ->add('studentGroup', EntityType::class, [
                'class' => Group::class,
                'choice_label' => 'code',
                'label' => 'Група'
            ])
            ->add('imageFile', FileType::class, [
                'required' => false,
                'label' => 'Фото'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Зберегти'
            ])
        ;
    }
}