<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('genre', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'male',
                    'Female' => 'female'
                ),
                'multiple' => false,
                'expanded' => true,
                'required' => true,
                'data' => 'male'

            ))
            ->add('city', ChoiceType::class, array(
                'choices' => [

                        'Debrecen' => 'debrecen',
                        'Budapest' => 'budapest',
                        'Szolnok' => 'szolnok',
                        'Győr' => 'győr',
                        'Pécs' => 'pécs',
                        'Szeged' => 'szeged',
                        'Sopron' => 'sopron',
                        'Nyíregyháza' => 'nyíregyháza',
                        'Polgár' => 'polgár',
                        'Miskolc' => 'miskolc',
                        'Eger' => 'eger',
                        'Dunaújváros' => 'dunaújváros',

                ],

            ))

            ->add('address')
            ->add('comment', TextareaType::class)
        ;

    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
