<?php

namespace GamingSchoolBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use GamingSchoolBundle\Entity\User;  
use GamingSchoolBundle\Entity\CoachingPack;  

class CheckSoldService
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function check($user, $pack){
        
        $sold = $user->getUserSold();
        $cost = $pack->getCoachingPackPrice();
            
        return $sold-$cost > 0;
    }
}
