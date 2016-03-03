<?php

namespace GamingSchoolBundle\Controller;

//use GamingSchoolBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    /**
     * @Route("/coaches/{game_id}")
     */
    public function coachesByGameAction($game_id)
    {
    	$userRepository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('GamingSchoolBundle:User')
		;

		$gameRepository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('GamingSchoolBundle:game')
		;


		$listCoaches = $userRepository->findByCoaches($game_id);
		$game = $gameRepository->find($game_id);
		$data["game"] = $game->getGameName();

		foreach ($listCoaches as $coach) {
		  	// $advert est une instance de Advert
			$data["listCoaches"][] = array(
				'id' => $coach->getId(),
			 	'username' => $coach->getUsername(),
			 	'firstname' => $coach->getUserFirstName(),
			 	'lastname' => $coach ->getUserLastName(),
			 	'email' => $coach->getEmail()
			);
		}
        return $this->render('GamingSchoolBundle:Default:listcoaches.html.twig', $data);
    }
}
