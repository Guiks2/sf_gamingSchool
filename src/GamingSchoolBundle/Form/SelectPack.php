<?php

namespace GamingSchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GamingSchoolBundle\Entity\CoachingPack;
use Doctrine\Common\Persistence\ObjectManager;


class SelectPack extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('selectPack', ChoiceType::class, array(
            'choices'  => array(
                'Pack '.$options['data'][0]['nb_hours'].'h - '.$options['data'][0]['price'].'€' => $options['data'][0]['id'],
                'Pack '.$options['data'][1]['nb_hours'].'h - '.$options['data'][1]['price'].'€' => $options['data'][1]['id'],
                'Pack '.$options['data'][2]['nb_hours'].'h - '.$options['data'][2]['price'].'€' => $options['data'][2]['id'],
            ),
            'expanded' => true,
            'data' => $options['data'][0]['id']
        ))->add('save', SubmitType::class, array('label' => 'Réserver'));
        
        /*$builder->add('coaching_pack', EntityType::class, array(
            'class' => 'GamingSchoolBundle:CoachingPack',
            'choices' => $options['data'],
        ));*/
        
        /*$repoCoachingPack = $this->em->getRepository('GamingSchoolBundle:CoachingPack');
        $builder->add('coaching_pack', EntityType::class, array(
            'class' => 'GamingSchoolBundle:CoachingPack',
            'query_builder' => function ($repoCoachingPack) {
                return $repoCoachingPack->findCoachingPackByCoach($coach);
            },
        ));*/
    }

}