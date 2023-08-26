<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'google_id',
        'given_name',
        'family_name',
        'profile_picture',
        'gender',
        'age',
        'contact_number',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // login user
    protected static function AuthUser($request) {
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
    }
    // Create new user
    protected static function NewUser($request) {
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
    }
    // Create new user - with Google ID
    protected static function GoogleNewUser($googleUser) {
        $user = User::create([
            'google_id' => $googleUser->id,
            'given_name' => $googleUser->user['given_name'],
            'family_name' => $googleUser->user['family_name'],
            'email' => $googleUser->email
        ]);
    
        Auth::login($user);
    }
}
