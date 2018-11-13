<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        return $user;
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $conditionValidate = [
            'login_id' => 'required|string|exists:users,name',
            'password' => 'required|string|min:6',
        ];

        if (strpos($request->get('login_id'), '@')) {
            $conditionValidate = [
                'login_id' => 'required|string|email|max:100|exists:users,email',
                'password' => 'required|string|min:6',
            ];
        }

        $this->validate($request, $conditionValidate);
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'error_general' => [trans('auth.failed')],
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $loginId = strpos($request->get('login_id'), '@') ? 'email' : 'name';

        return $this->guard()->attempt(
            [$loginId => $request->get('login_id'), 'password' => $request->get('password'), 'active' => 1], $request->filled('remember')
        );
    }
}
