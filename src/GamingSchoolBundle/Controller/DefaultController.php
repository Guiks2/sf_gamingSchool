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
        return $this->render('GamingSchoolBundle:Default:index.html.twig');
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
     * @Route("/profile/user", name="userprofile")
     */
    public function userProfileAction(Request $request)
    {
		$connected = $this->checkIsConnected($request);
		if (!$connected){
			return new RedirectResponse('login');
		} else {
			return new Response('Mon profil');
			//return $this->render('GamingSchoolBundle:Default:profile.html.twig');
		}
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
