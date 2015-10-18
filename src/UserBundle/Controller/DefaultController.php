<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        //return $this->render('UserBundle:Default:index.html.twig', array('name' => $name));
        $user = new User();
        $user->setName("Dani");
        return $user;
    }
}
