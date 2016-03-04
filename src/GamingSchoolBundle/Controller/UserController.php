<?php

namespace GamingSchoolBundle\Controller;

//use GamingSchoolBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use GamingSchoolBundle\Form\SelectPack;
use GamingSchoolBundle\Entity\User;  
use GamingSchoolBundle\Entity\CoachingPack;  
use GamingSchoolBundle\Entity\CoachingSold;  

class UserController extends Controller
{
    /**
     * @Route("/coaches/{game_slug}", name="game")
     */
    public function coachesByGameAction($game_slug)
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

    	$game = $gameRepository->findOneBy(array('gameSlug' => $game_slug));
    	$listCoaches = $userRepository->findByCoaches($game->getId());
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
    
    /**
     * @Route("/profile/coach/{coach_id}", name="coachprofile")
     */
    public function coachByIdAction($coach_id, Request $request)
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
        $form = $this->createForm(SelectPack::Class, $data["packs"]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->get('doctrine')->getManager();
            
            $userRepository = $em->getRepository('GamingSchoolBundle:User');
            $coachingPackRepository = $em->getRepository('GamingSchoolBundle:CoachingPack');
            $coachingSoldRepository = $em->getRepository('GamingSchoolBundle:CoachingSold');
            
            $student = $userRepository->find($this->get('security.token_storage')->getToken()->getUser()->getId());
            $coach = $userRepository->find($coach_id);
            $coachingPack = $coachingPackRepository->find($form->get('selectPack')->getData());
            
            $serviceCheck = $this->get("check_sold");
            if($serviceCheck->check($student, $coachingPack)){
                $student->setUserSold($student->getUserSold() - $coachingPack->getCoachingPackPrice());
                $coach->setUserSold($coach->getUserSold() + $coachingPack->getCoachingPackPrice());
            
                $em->persist($student);
                $em->persist($coach);
    
                $em->flush();
            } else {
            }
        }
        
        $data['form'] = $form->createView();
        return $this->render('GamingSchoolBundle:Default:coach.html.twig', $data);
    }

    
}

