<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cart;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Laravel\Socialite\Facades\Socialite;
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
        return back()->withErrors(['password' => 'Invalid Credentials'])->onlyInput('password');
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
        $user = self::create($formFields);
        // auto login user
        auth()->login($user);
    }
    protected function ManageProfile() {
        $search_user = self::where('id', Auth::user()->id)->first();
        return view('user.profile.manage-my-acc',['profile' => $search_user]);
    }
    // Create new user - with Google ID
    protected static function GoogleNewUser() {
        $googleUser = Socialite::driver('google')->user();
        $exist_user = self::where('google_id',$googleUser->id)->first();

        if($exist_user) {
            Auth::login($exist_user);
            if($exist_user->role == 1) { // if admin
                return redirect(route('admin.dashboard'))->with('message','You are now logged-in!');
            } else { // user
                return redirect(route('index'))->with('message','You are now logged-in!');
            }
        } else {
            $user = self::create([
                'google_id' => $googleUser->id,
                'given_name' => $googleUser->user['given_name'],
                'family_name' => $googleUser->user['family_name'],
                'email' => $googleUser->email
            ]);
        
            Auth::login($user);
            return redirect(route('index'))->with('message','You are now logged-in!');
        }
    }
    // Relationship to cart
    protected function cart(Cart $cart) {
        return $this->hasMany($cart::class, 'user_id');
    }
}
