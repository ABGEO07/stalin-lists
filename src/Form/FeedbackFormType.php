<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'თქვენი სახელი',
                    'label_attr' => ['class' => 'bmd-label-floating'],
                    'attr' => ['class' => 'form-control'],
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'თქვენი E-Mail მისამართი',
                    'label_attr' => ['class' => 'bmd-label-floating'],
                    'attr' => ['class' => 'form-control'],
                ]
            )
            ->add(
                'subject',
                ChoiceType::class,
                [
                    'label' => 'შეტყობინების თემა',
                    'choices' => [
                        'ხარვეზის შეტყობინება' => 'ხარვეზის შეტყობინება',
                        'სხვა' => 'სხვა',
                    ],
                    'label_attr' => ['class' => 'bmd-label-floating'],
                    'attr' => ['class' => 'form-control selectpicker', 'data-style' => 'btn btn-link'],
                ]
            )
            ->add(
                'message',
                TextareaType::class,
                [
                    'label' => 'შეტყობინება',
                    'label_attr' => ['class' => 'bmd-label-floating'],
                    'attr' => ['class' => 'form-control', 'rows' => 4],
                ]
            )
            ->add(
                'send',
                SubmitType::class,
                [
                    'label' => 'შეტყობინების გაგზავნა',
                    'attr' => [
                        'class' => 'btn btn-primary btn-raised',
                    ],
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                // Configure your form options here
            ]
        );
    }
}
