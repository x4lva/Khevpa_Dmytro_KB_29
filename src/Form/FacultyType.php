<?php

namespace App\Form;

use App\Entity\Faculty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FacultyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Назва'
            ])
            ->add('code', TextType::class, [
                'label' => 'Код'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Опис'
            ])
            ->add('foundationDate', DateType::class, [
                'label' => 'Дата заснування'
            ])
            ->add('email', TextType::class, [
                'label' => 'Email'
            ])
            ->add('site', TextType::class, [
                'label' => 'Сайт'
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Телефон'
            ])
            ->add('imageFile', FileType::class, [
                'required' => false,
                'label' => 'Логотип'
            ])
            ->add('address', TextType::class, [
                'label' => 'Адреса'
            ])
            ->add('lan', NumberType::class, [
                'label' => 'Довгота'
            ])
            ->add('lng', NumberType::class, [
                'label' => 'Широта'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Зберегти'
            ])
        ;
    }
}