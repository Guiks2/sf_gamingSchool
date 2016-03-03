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

    /**
     * @Route("/profile/user/{user_id}", name="userprofile")
     */
    public function userProfileAction(Request $request, $user_id)
    {
    	$userRepository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('GamingSchoolBundle:User')
		;

		$infosUser = $userRepository->find($user_id);
		$data["infos"] = $infosUser;
		
		if($infosUser->hasRole('ROLE_COACH'))
			return $this->redirect('/profile/coach/'.$user_id.'');
		else if($infosUser->hasRole('ROLE_USER'))
			return $this->render('GamingSchoolBundle:Default:profile.html.twig', $data);
	}
}
