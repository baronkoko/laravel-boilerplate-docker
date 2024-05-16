<?php

namespace App\Domains\Auth\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Domains\Auth\Services\UserService;

/**
 * Class UserController.
 */
class UserController
{
    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    */

    /**
     * @var UserService
     */
    protected $userService;

    /**
     * UserController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * The user has been authenticated.
     *
     * @param  Request  $request
     * @param $user
     * @return mixed
     */
    public function getUser(Request $request)
    {
        $user = $this->userService->getByType("admin");

        return $user;
    }
}
