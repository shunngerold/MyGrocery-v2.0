<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addresses extends Model
{
    use HasFactory;

    protected function AddressBook() {
        $search_user = User::where('id', Auth::user()->id)->first();
        $search_address = self::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.profile.address-book',['address' => $search_address],['profile' => $search_user]);
    }
}
