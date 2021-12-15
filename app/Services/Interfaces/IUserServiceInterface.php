<?php

namespace App\Services\Interfaces;

interface IUserServiceInterface
{
    /**
     * Get all users
     *
     * @return User[]
     */
    public function getUser();

    /**
     * Get user by id
     *
     * @param int $id
     * @return array
     */
    public function getUserById(int $id);

    /**
     * Get user by email
     *
     * @param string $email
     * @return void
     */
    public function postUser(array $user);

    /**
     * Update user by id
     *
     * @param array $user
     * @param int $id
     * @return void
     */
    public function putUser(array $user, int $id);

    /**
     * Delete user by id
     *
     * @param int $id
     * @return boolean
     */
    public function delUser(int $id);

    /**
     * @param int $id
     * @return boolean
     */
    public function restoreUser(int $id);
}
