<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService
{
    /**
     *
     * @var User
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * ユーザIDからユーザ情報を取得する
     *
     * @param int $user_id
     * @return model
     */
    public function getUserInfoByUserId($user_id)
    {
        return $this->userRepository->getUserInfoByUserId($user_id);
    }
}