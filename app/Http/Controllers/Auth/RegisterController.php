<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Filament\Events\Auth\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    //
//    register view
    public function index(){
        return view('pages.auth.sign-up');
    }

//    register user
    public function store(Request $request){

        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');

    }


//login view
    public function loginIndex(){
        return view('pages.auth.sign-in');
    }
//login request
    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

//            return redirect()->intended('/dashboard'); // ან სადაც გინდა
            return redirect()->route('root'); // ან სადაც გინდა
        }

        return back()->withErrors([
            'email' => 'მომხმარებელი ან პაროლი არასწორია.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
//        Auth::logout();
        Auth::guard('web')->logout();

//        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
