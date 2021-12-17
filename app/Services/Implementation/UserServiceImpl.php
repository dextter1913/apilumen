<?php

namespace App\Services\Implementation;
use App\Services\Interfaces\IUserServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl implements IUserServiceInterface
{
    private $model;
    public function __construct()
    {
        $this->model = new User();
    }

    public function getUser()
    {
    }

    public function getUserById(int $id)
    {
    }

    /**
     * Crear un nuevo usuario
     */
    public function postUser(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }

    public function putUser(array $user, int $id)
    {
    }

    public function delUser(int $id)
    {
    }

    public function restoreUser(int $id)
    {
    }
}
