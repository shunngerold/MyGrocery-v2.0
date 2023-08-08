<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    // show landing page
    public function landing() {
        return view('user.welcome');
    }
    // logout user
    public function userLogout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'))->with('message','You have been logged out!');
    }

    // ================================ USER LOGIN ========================================
    // show login page
    public function login() {
        return view('user.login');
    }
    // authenticate user
    public function user_authenticate(Request $request) {
        $authUser = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($authUser)) {
            if(auth()->user()->role == 1) {
                $request->session()->regenerate();
                return redirect(route('admin.dashboard'))->with('message','You are now logged-in!');
            } else {
                $request->session()->regenerate();
                return redirect(route('index'))->with('message','You are now logged-in!');
            }
        }

        return back()->withErrors(['password' => 'Invalid Credentials'])->onlyInput('password');
    }

    // ================================ USER REGISTRATION ========================================
    // show register page
    public function register() {
        return view('user.register');
    }
    // add new user
    public function user_new(Request $request) {
        $formFields = $request->validate([
            'given_name' => ['required','max:60', 'regex:/^[A-Za-z]+$/'],
            'family_name' => ['max:60', 'regex:/^[A-Za-z]+$/'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:8'
        ]);
        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // create user
        $user = User::create($formFields);
        // auto login user
        auth()->login($user);
        // return with message
        return redirect(route('index'))->with('message','User successfully registered and logged-in!');
    }

    // ================================ GOOGLE API ========================================
    // google redirect
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }
    // google callback
    public function callback() {
        try {
            $googleUser = Socialite::driver('google')->user();
            $exist_user = User::where('google_id',$googleUser->id)->first();

            if($exist_user) {
                Auth::login($exist_user);
                if($exist_user->role == 1) { // if admin
                    return redirect(route('admin.dashboard'))->with('message','You are now logged-in!');
                } else { // user
                    return redirect(route('index'))->with('message','You are now logged-in!');
                }
            } else {
                $user = User::create([
                    'google_id' => $googleUser->id,
                    'given_name' => $googleUser->user['given_name'],
                    'family_name' => $googleUser->user['family_name'],
                    'email' => $googleUser->email
                ]);
            
                Auth::login($user);
            
                return redirect(route('index'));
            }
        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }
}
