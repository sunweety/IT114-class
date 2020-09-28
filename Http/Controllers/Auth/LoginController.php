<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $inputVal = $request->all();

        $this->validate($request, [
            'card_id' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('card_id' => $inputVal['card_id'], 'password' => $inputVal['password']))) {
            if (auth()->user()->type == 1) {
                return redirect()->route('admin.route');
            } elseif (auth()->user()->type == 2) {
                return redirect()->route('landlord.route');
            } elseif (auth()->user()->type == 3) {
                return redirect()->route('tenant.route');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'card_id & Password are incorrect.');
        }
    }
}
