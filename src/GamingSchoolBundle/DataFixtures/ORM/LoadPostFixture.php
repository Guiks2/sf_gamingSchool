<?php

namespace GamingSchoolBundle\DataFixtures\ORM;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use GamingSchoolBundle\Entity\Statut;
use GamingSchoolBundle\Entity\Game;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostFixture implements FixtureInterface
{
    function load(ObjectManager $manager)
    {
        $statut = new Statut();
        $statut->setStatutName('user');
        $manager->persist($statut);

        $game = new Game();
        $game->setGameName('League of Legends');
        $manager->persist($game);        
        /*
        $i = 1;
        while ($i <= 100){
            $post = new Post();
            $post->setTitle('Titre du post n°'.$i);
            $manager->persist($post);
            
            $i++;
        }*/
        
        $manager->flush();
    }
}

?>