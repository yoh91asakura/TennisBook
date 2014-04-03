<?php

namespace TennisBook\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

class TennisBookRegistrationFormType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('username');
    }

    public function getName()
    {
        return 'tennisbook_user_registration';
    }
} 