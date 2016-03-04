<?php

namespace GamingSchoolBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
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
     * @Route("/", name="index")
     */
    public function indexAction()
    {
    	$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('GamingSchoolBundle:game')
		;

		$securityContext = $this->container->get('security.authorization_checker');
		if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    		$data["logged_user_id"] = $this->get('security.token_storage')->getToken()->getUser()->getId();
		}
			

		$listGames = $repository->findAll();

		foreach ($listGames as $game) {
		  	// $advert est une instance de Advert
			$data["listGames"][] = array(
				'id' => $game->getId(),
			 	'name' => $game->getGameName(),
			 	'slug' => $game->getGameSlug()
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
	
	public function checkIsConnected(Request $request){
		$session = $request->getSession();
		if ($session->get('idUser') == null || $session->get('idUser') == ''){
			return false;
		} else {
			return true;
		}
	}
}
