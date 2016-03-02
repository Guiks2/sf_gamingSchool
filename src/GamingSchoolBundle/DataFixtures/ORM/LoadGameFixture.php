<?php

namespace GamingSchoolBundle\DataFixtures\ORM;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use GamingSchoolBundle\Entity\Game;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadGameFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder() {
      // the order in which fixtures will be loaded
      // the lower the number, the sooner that this fixture is loaded
      return 1;
    }
    
    function load(ObjectManager $manager)
    {
        $games = array(
            array('name' => 'League of Legends', 'logo' => ''),
            array('name' => 'Counter Strike : Global Offensive', 'logo' => ''),
            array('name' => 'Hearthstone', 'logo' => ''),
            array('name' => 'Starcraft II', 'logo' => ''),
            array('name' => 'World of Warcraft', 'logo' => ''),
            array('name' => 'DotA 2', 'logo' => ''),
        );
        $i = 0;
        foreach ($games as $g) {
            $game = new Game();
            $game->setGameName($g['name']);
            $game->setGameLogoUrl($g['logo']);
            $manager->persist($game);
            $this->addReference('game'.$i, $game);     
            $i++;                             
        }   
        
        $manager->flush();
    }
}

?>