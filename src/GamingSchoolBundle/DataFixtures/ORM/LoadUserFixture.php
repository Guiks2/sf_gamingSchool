<?php

namespace GamingSchoolBundle\DataFixtures\ORM;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use GamingSchoolBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadUserFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        // the order in which fixtures will be loaded
      // the lower the number, the sooner that this fixture is loaded
      return 2;
    }

    public function load(ObjectManager $manager)
    {
        $users = array(
            array('username' => 'User1', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'Paul', 'email' => 'jean.paul1@mail.fr', 'address' => '2 test adresse 75000', 'phone' => '0102030405', 'role' => '', 'sold' => '1000'),
            array('username' => 'User2', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'Paul', 'email' => 'jean.paul2@mail.fr', 'address' => '2 test adresse 75000', 'phone' => '0102030405', 'role' => '', 'sold' => '5'),
            array('username' => 'Coach1', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene1@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Coach2', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene2@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Coach3', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene3@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Coach4', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene4@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Coach5', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene5@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Coach6', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'René', 'email' => 'jean.rene6@mail.fr', 'address' => '1 test adresse 75000', 'phone' => '0203040506', 'role' => 'ROLE_COACH', 'sold' => '1000'),
            array('username' => 'Admin', 'password' => 'password', 'first_name' => 'Jean', 'last_name' => 'Pierre', 'email' => 'jean.pierre@mail.fr', 'address' => '3 test adresse 75000', 'phone' => '0304050607', 'role' => 'ROLE_ADMIN', 'sold' => '1000'),
        );

        $i = 0;
        foreach ($users as $u) {
            $user = new User();
            $user->setUsername($u['username']);
            $user->setPlainPassword($u['password']);
            $user->setUserFirstname($u['first_name']);
            $user->setUserLastname($u['last_name']);
            $user->setEmail($u['email']);
            $user->setUserAddress($u['address']);
            $user->setUserPhone($u['phone']);
            $user->setRoles(array($u['role']));
            $user->setUserSold($u['sold']);
            $user->setEnabled(true);
            $manager->persist($user);
            $this->addReference('user'.$i, $user);
            ++$i;
        }

        $manager->flush();
    }
}
