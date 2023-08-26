<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
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
    public function user_authenticate(Request $request, User $userModel) {
        $userModel::AuthUser($request);
        return back()->withErrors(['password' => 'Invalid Credentials'])->onlyInput('password');
    }
    // ================================ USER REGISTRATION ========================================
    // show register page
    public function register() {
        return view('user.register');
    }
    // add new user
    public function user_new(Request $request, User $userModel) {
        $userModel::NewUser($request);
        return redirect(route('index'))->with('message','User successfully registered and logged-in!');
    }
    // ================================ GOOGLE API ========================================
    // google redirect
    public function redirect(Socialite $socialite) {
        return $socialite::driver('google')->redirect();
    }
    // google callback
    public function callback(User $userModel, Socialite $socialite) {
        try {
            $googleUser = $socialite::driver('google')->user();
            $exist_user = $userModel::where('google_id',$googleUser->id)->first();

            if($exist_user) {
                Auth::login($exist_user);
                if($exist_user->role == 1) { // if admin
                    return redirect(route('admin.dashboard'))->with('message','You are now logged-in!');
                } else { // user
                    return redirect(route('index'))->with('message','You are now logged-in!');
                }
            } else {
                $userModel::GoogleNewUser($request);
                return redirect(route('index'));
            }
        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }
}
