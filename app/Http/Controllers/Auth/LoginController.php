<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        // ? dd($input); = Returns the username and password from the Form

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            // ? 0 = MA, 1 = DA, 2 = DS, 3 = L
            // ? MA = Main Admin, DA = Department Admin, DS = Department Staff, L = Librarian

            // Start If Statement Version
            // if (auth()->user()->role == 3) {
            //     return redirect()->route('home.librarian');
            // } else if (auth()->user()->role == 2) {
            //     return redirect()->route('home.staff');
            // } else if (auth()->user()->role == 1) {
            //     return redirect()->route('home.depAdmin');
            // } else if (auth()->user()->role == 0) {
            //     return redirect()->route('home.mainAdmin');
            // } else {
            //     return redirect()->route('home');
            // }
            // End If Statement Version

            // ? Start of Switch Case Version
            $role = auth()->user()->role;

            switch ($role) {
                case 0:
                    return redirect()->route('home.mainAdmin');
                    break;
                case 1:
                    return redirect()->route('home.depAdmin');
                    break;
                case 2:
                    return redirect()->route('home.staff');
                    break;
                case 3:
                    return redirect()->route('home.librarian');
                    break;
                default:
                    return redirect()->route('home');
            }
            // ! End of Switch Case Version

        } else {
            return redirect()->route('login')->with('error', 'Username And Password Are Wrong.');
        }
    }
}
