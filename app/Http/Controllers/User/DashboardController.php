<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index(){
        return view('user.user_dashboard');
    }
    function menTShirts(){
        return view('user.men.TShirts');
    }
}
