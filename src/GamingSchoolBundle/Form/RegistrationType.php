<?php

namespace GamingSchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

const textType = 'Symfony\Component\Form\Extension\Core\Type\TextType';
const emailType = 'Symfony\Component\Form\Extension\Core\Type\EmailType';

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('username', textType, array('label' => 'Nom de compte'))
			->add('email', emailType, array('label' => 'eMail'))
			->add('userfirstname', textType, array('label' => 'Prénom'))
			->add('userLastname', textType, array('label' => 'Nom'))
			->add('userAddress', textType, array('label' => 'Adresse'))
			->add('userPhone', textType, array('label' => 'Téléphone'))
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