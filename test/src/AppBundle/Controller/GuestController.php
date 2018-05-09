<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GuestController
 * @package AppBundle\Controller
 */
class GuestController extends FOSRestController
{
    /**
     * Check in
     * @Annotations\View
     * @return \FOS\RestBundle\View\View
     */
    public function getGuestAction()
    {

        return $this->view(['show_data' => 'ssss'], Response::HTTP_OK);
    }
}
