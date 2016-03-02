<?php

namespace GamingSchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

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
     */
    public function loginAction(Request $request)
    {
		$session = $request->getSession();
		
		// Create or get user session id
		$idUser = 1;

		// set session attributes
		$session->set('idUser', $idUser);
		
		$data = array();
		$date = date('d/m/Y H:i:s');
		$data["date"] = $date;
		return $this->render('GamingSchoolBundle:Default:login.html.twig', $data);
    }
	
	/**
     * @Route("/subscribe", name="subscribe")
     */
    public function subscribeAction()
    {
        return new Response('Page d\'inscription');
		//return $this->render('GamingSchoolBundle:Default:subscribe.html.twig');
    }
	
	/**
     * @Route("/profile", name="profile")
     */
    public function profileAction()
    {
        return new Response('Mon profil');
		//return $this->render('GamingSchoolBundle:Default:profile.html.twig');
    }
	
	function checkIsConnected(){
		$idUser = $session->get('idUser');
	}
}