<?php

namespace TennisBook\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class TennisBookRegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name');
    }

    public function getName()
    {
        return 'tennisbook_user_registration';
    }
} 