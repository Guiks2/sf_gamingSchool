<?php

namespace GamingSchoolBundle\DataFixtures\ORM;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use GamingSchoolBundle\Entity\CoachingPack;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadPackFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        // the order in which fixtures will be loaded
      // the lower the number, the sooner that this fixture is loaded
      return 3;
    }

    public function load(ObjectManager $manager)
    {
        $packs = array(
            array('nb_hours' => 1, 'price' => '5', 'coach_id' => $this->getReference('user3'), 'game_id' => $this->getReference('game0')),
            array('nb_hours' => 3, 'price' => '10', 'coach_id' => $this->getReference('user3'), 'game_id' => $this->getReference('game0')),
            array('nb_hours' => 5, 'price' => '15', 'coach_id' => $this->getReference('user3'), 'game_id' => $this->getReference('game0')),
            array('nb_hours' => 1, 'price' => '5', 'coach_id' => $this->getReference('user4'), 'game_id' => $this->getReference('game1')),
            array('nb_hours' => 3, 'price' => '10', 'coach_id' => $this->getReference('user4'), 'game_id' => $this->getReference('game1')),
            array('nb_hours' => 5, 'price' => '15', 'coach_id' => $this->getReference('user4'), 'game_id' => $this->getReference('game1')),
            array('nb_hours' => 1, 'price' => '5', 'coach_id' => $this->getReference('user5'), 'game_id' => $this->getReference('game2')),
            array('nb_hours' => 3, 'price' => '10', 'coach_id' => $this->getReference('user5'), 'game_id' => $this->getReference('game2')),
            array('nb_hours' => 5, 'price' => '15', 'coach_id' => $this->getReference('user5'), 'game_id' => $this->getReference('game2')),
        );
        $i = 0;
        foreach ($packs as $p) {
            $pack = new CoachingPack();
            $pack->setCoachingPackNbHours($p['nb_hours']);
            $pack->setCoachingPackPrice($p['price']);
            $pack->setCoachingPackGameId($p['game_id']);
            $pack->setCoachingPackCoachId($p['coach_id']);
            $manager->persist($pack);
            $this->addReference('pack'.$i, $pack);
            ++$i;
        }

        $manager->flush();
    }
}
