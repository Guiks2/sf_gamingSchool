<?php

namespace GamingSchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProposeFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('login')
			->add('password')
		;
	}
	
	public function getName()
	{
		return 'proposeformtype';
	}
}