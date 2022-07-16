<?php

namespace App\Http\Controllers;

use App\Attendence;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendenceController extends Controller
{
    public function index()
    {
        Attendence::create([
            'check_in_time' => Carbon::now(),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('home');
    }
}
