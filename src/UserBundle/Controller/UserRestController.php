<?php

namespace UserBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Hateoas\HateoasBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use UserBundle\Entity\User;
use UserBundle\Entity\UserRepository;
use Hateoas\Representation\CollectionRepresentation;

class UserRestController extends Controller
{
    /**
     * @param $username
     * @return CollectionRepresentation
     *
     *
     */
    public function getUserAction($username)
    {
        $users = array();

        for ($i = 0; $i < 5; ++$i) {
            $user = new User();
            $user->setName($username);
            $user->setCreatedAt(new \DateTime());
            $users[] = $user;
        }
        return new CollectionRepresentation($users);
    }

    public function getUser2Action($username)
    {
        $users = array();

        for ($i = 0; $i < 5; ++$i) {
            $user = new User();
            $user->setName($username);
            $user->setCreatedAt(new \DateTime());
            $users[] = $user;
        }
        return new CollectionRepresentation($users);
    }
}
