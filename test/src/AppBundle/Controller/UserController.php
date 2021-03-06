<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserController
 * @package AppBundle\Controller
 */
class UserController extends FOSRestController
{
    /**
     * Users list
     *
     * @Annotations\View
     * @return \FOS\RestBundle\View\View
     */
    public function getUsersAction()
    {
        /** @var  $userlists */
        $userlists = $this->get('core.userlist');
        return $this->view(['users' => $userlists->fetchUsers()], Response::HTTP_OK);
    }
}
