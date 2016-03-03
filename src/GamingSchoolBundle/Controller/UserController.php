<?php

namespace GamingSchoolBundle\Controller;

//use GamingSchoolBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use GamingSchoolBundle\Form\SelectPack;

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
			 	'name' => $coach->getUsername()
			);
		}
        return $this->render('GamingSchoolBundle:Default:listcoaches.html.twig', $data);
    }
    
    /**
     * @Route("/profile/coach/{coach_id}")
     */
    public function coachByIdAction($coach_id)
    {
        $userRepository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('GamingSchoolBundle:User')
        ;
        $data['coach'] = $userRepository->find($coach_id);
        
        $packs = $data['coach']->getCoachingPack();
        foreach ($packs as $pack) {
            $data["packs"][] = array(
                'id' => $pack->getId(),
                'nb_hours' => $pack->getCoachingPackNbHours(),
                'price' => $pack->getCoachingPackPrice(),
            );
        }
        $data['form'] = $this->createForm(SelectPack::Class, $data["packs"])->createView();
        
        /*$data['form']->handleRequest($_REQUEST);
        if ($data['form']->isSubmitted() && $data['form']->isValid()) {
        // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('task_success');
        }*/
        
        return $this->render('GamingSchoolBundle:Default:coach.html.twig', $data);
    }
}

