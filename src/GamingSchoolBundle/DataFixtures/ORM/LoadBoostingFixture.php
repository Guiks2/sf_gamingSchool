<?php

namespace GamingSchoolBundle\DataFixtures\ORM;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use GamingSchoolBundle\Entity\Boosting;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadBoostingFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
      // the order in which fixtures will be loaded
      // the lower the number, the sooner that this fixture is loaded
      return 4;
    }
    
    function load(ObjectManager $manager)
    {
        $boostings = array(
            array('game_id' => $this->getReference('game0'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game0'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game0'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
            array('game_id' => $this->getReference('game1'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game1'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game1'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
            array('game_id' => $this->getReference('game2'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game2'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game2'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
            array('game_id' => $this->getReference('game3'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game3'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game3'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
            array('game_id' => $this->getReference('game4'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game4'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game4'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
            array('game_id' => $this->getReference('game5'), 'rank_from' => 'Bronze I', 'rank_to' => 'Gold I', 'cost' => '10'),
            array('game_id' => $this->getReference('game5'), 'rank_from' => 'Bronze I', 'rank_to' => 'Platine I', 'cost' => '25'),
            array('game_id' => $this->getReference('game5'), 'rank_from' => 'Bronze I', 'rank_to' => 'Diamant I', 'cost' => '50'),
        );
        $i = 0;
        foreach ($boostings as $b) {
            $boosting = new Boosting();
            $boosting->setBoostingGameId($b['game_id']);
            $boosting->setBoostingRankFrom($b['rank_from']);
            $boosting->setBoostingRankTo($b['rank_to']);
            $boosting->setBoostingCost($b['cost']);
            $manager->persist($boosting);
            $this->addReference('boosting'.$i, $boosting);     
            $i++;            
        }        

        $manager->flush();
    }
}

?>