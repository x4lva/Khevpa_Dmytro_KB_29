<?php

namespace App\Form\Type;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType as Base;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TomSelectType extends Base
{
    public function getBlockPrefix(): string
    {
        return 'application_form_choice';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addViewTransformer(
            new CallbackTransformer(
                function (Collection $collection) {
                    return $collection->toArray();
                },
                function (array $array) {
                    return new ArrayCollection($array);
                }
            )
        );

        parent::buildForm($builder, $options);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['placeholder_text'] = $options['placeholder_text'];
        $view->vars['max_options'] = $options['max_options'];

        parent::buildView($view, $form, $options);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'placeholder_text' => null,
            'max_options' => null,
        ]);

        parent::configureOptions($resolver);
    }
}