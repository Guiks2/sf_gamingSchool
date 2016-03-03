<?php

namespace GamingSchoolBundle\Controller;

use GamingSchoolBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('GamingSchoolBundle:game')
		;

		$listGames = $repository->findAll();

		foreach ($listGames as $game) {
		  	// $advert est une instance de Advert
			$data["listGames"][] = array(
				'id' => $game->getId(),
			 	'name' => $game->getGameName(),
			 	'logo' => $game->getGameLogoUrl()
			);
		}
        return $this->render('GamingSchoolBundle:Default:index.html.twig', $data);
    }
	
	
	/**
     * @Route("/login", name="login")
     *//*
    public function loginAction(Request $request)
    {

		// values POST

		$username = "";
		$password = "";

		// match username/password in database


		$query = $qb->getQuery();
		$result = $query->getResult();
		
		echo $result;


		$session = $request->getSession();

		// Create or get user session id
		$idUser = 1;

		// set session attributes
		$session->set('idUser', $idUser);

		$data = array();
		$date = date('d/m/Y H:i:s');
		$data["date"] = $date;
		return $this->render('GamingSchoolBundle:Default:login.html.twig', $data);
    }*/
	
	/**
     * @Route("/signup", name="signup")
     */
    public function signupAction()
    {
        return new Response('Page d\'inscription');
		//return $this->render('GamingSchoolBundle:Default:subscribe.html.twig');
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

	/**
     * @Route("/profile/coach", name="coachprofile")
     */
    public function coachProfileAction(Request $request)
    {
		return $this->render('GamingSchoolBundle:Default:coach.html.twig');
    }
	
	public function checkIsConnected(Request $request){
		$session = $request->getSession();
		if ($session->get('idUser') == null || $session->get('idUser') == ''){
			return false;
		} else {
			return true;
		}
	}
}
