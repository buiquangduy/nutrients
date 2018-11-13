<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterVerifyMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create User, send response to client
     *
     * @param RegisterRequest $request
     * @param UserService $userService
     * @return string
     */
    protected function create(RegisterRequest $request, UserService $userService)
    {
        $userService->create($request->all());
        Mail::to($request->get('email'))->send(new RegisterVerifyMail($request));

        return response([], 201);
    }

    /**
     * Active account and redirect to home
     *
     * @param string $verifyCode
     * @param UserService $userService
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function activeAccount(string $verifyCode, UserService $userService)
    {
        $user = $userService->activeAccount($verifyCode);
        if (is_int($user) && $user == 0) {
            return redirect('/register')->with('verify_failed', 0);
        }

        if (is_int($user)&& $user == 1) {
            return redirect('/register')->with('verify_failed', 1);
        }

        if (is_int($user) && $user == 2) {
            return redirect('/login');
        }

        if (!Auth::check()) {
            Auth::login($user);
        }

        return redirect('/');
    }
}
