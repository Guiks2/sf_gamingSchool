<?php

namespace GamingSchoolBundle\DataFixtures\ORM;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use GamingSchoolBundle\Entity\Game;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadGameFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        // the order in which fixtures will be loaded
      // the lower the number, the sooner that this fixture is loaded
      return 1;
    }

    public function load(ObjectManager $manager)
    {
        $games = array(
            array('name' => 'League of Legends', 'logo' => '', 'slug' => 'league-of-legends'),
            array('name' => 'Counter Strike : Global Offensive', 'logo' => '', 'slug' => 'counter-strike-go'),
            array('name' => 'Hearthstone', 'logo' => '', 'slug' => 'hearthstone'),
            array('name' => 'Starcraft II', 'logo' => '', 'slug' => 'starcraft-2'),
            array('name' => 'World of Warcraft', 'logo' => '', 'slug' => 'world-of-warcraft'),
            array('name' => 'DotA 2', 'logo' => '', 'slug' => 'dota-2'),
        );
        $i = 0;
        foreach ($games as $g) {
            $game = new Game();
            $game->setGameName($g['name']);
            $game->setGameLogoUrl($g['logo']);
            $game->setGameSlug($g['slug']);
            $manager->persist($game);
            $this->addReference('game'.$i, $game);
            ++$i;
        }

        $manager->flush();
    }
}
