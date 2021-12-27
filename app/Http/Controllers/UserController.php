<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Implementation\UserServiceImpl;

class UserController extends Controller
{
    /**
     * @var UserServiceImpl
     */
    private $userService;
    /**
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImpl $userService, Request $request)
    {
        $this->userService = $userService;
        $this->request = $request;
    }

    public function createUser()
    {
        $response = response("", 201);
        $this->userService->postUser($this->request->all());
        return $response;
    }

    public function getListUser(){

        //return response($this->userService->getUser(), 200);
        return [];
    }
}
