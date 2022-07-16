<?php namespace App\Services;


use App\User;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function index()
    {
        return User::where('id', '!=', Auth::user()->id)->get();
    }
}
