<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Products;
use App\Models\Addresses;
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
        return $userModel::AuthUser($request);
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
            return $userModel::GoogleNewUser();
        } catch(Exception $e) {
            abort(404);
        }
    }
    // User Manage Profile
    public function manageProfile(User $user) {
        return $user::ManageProfile();
    }
    // User Address Profile
    public function addressBook(Addresses $address) {
        return $address::AddressBook();
    }
}
