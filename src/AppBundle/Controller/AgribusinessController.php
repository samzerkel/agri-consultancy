<?php

namespace AppBundle\Controller;
/**
 * this controller is for agribusiness page in the consultancy agency website 
 * 
 * @author samson keleta <samize97@gmail.com>  
 */


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgribusinessController extends Controller {
    /**
     * this method gives output for agribusiness.html.twig 
     * 
     * @Route("/agribusiness")
     */
    public function agribusinessconsultnacyAction () {
        return $this->render('consultancy/agribusiness.html.twig');
        
    }
}
