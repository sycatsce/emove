<?php
/**
 * @author Kevin Mougammadaly <kevin.mougammadaly@ekino.com>
 */
namespace App\Controller\Api;

use App\Entity\User;
use App\Repository\UserRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\FOSRestBundle;

class UserController extends FOSRestBundle
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Rest\Get("/users")
     * @Rest\View()
     */
    public function getList()
    {
        $users = $this->userRepository->findAll();

        return $users;
    }
}
