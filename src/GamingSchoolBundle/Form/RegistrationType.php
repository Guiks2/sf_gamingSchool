<?php

namespace GamingSchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('userfirstname')
			->add('userLastname')
			->add('userAddress')
			->add('userPhone')
		;
	}
	
	public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
	
	public function getBlockPrefix()
	{
		return 'app_user_registration';
	}
	

}