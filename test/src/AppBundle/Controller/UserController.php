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
     * Update file
     *
     * @Annotations\View     *
     * @return \FOS\RestBundle\View\View
     */
    public function getUsersAction()
    {

        return $this->view(['show_data' => 'There should be users list'], Response::HTTP_OK);
    }
}
