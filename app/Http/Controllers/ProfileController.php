<?php

namespace App\Http\Controllers;

use App\Domain\Entities\User;
use App\Domain\Services\UserService;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @return User
     */
    public function index(): User
    {
        return Auth::user();
    }

    /**
     * Update User, send response to client
     *
     * @param UpdateProfileRequest $request
     * @param UserService $userService
     * @return Response
     */
    protected function update(UpdateProfileRequest $request, UserService $userService): Response
    {
        $userService->update(Auth::user(), $request->all());

        return response([], 201);
    }

    /**
     * @param ChangePasswordRequest $request
     * @param UserService $userService
     * @return Response
     */
    public function changePassword(ChangePasswordRequest $request, UserService $userService): Response
    {
        $userService->changePassword(Auth::user(),$request->all());

        return response([], 201);
    }
}
