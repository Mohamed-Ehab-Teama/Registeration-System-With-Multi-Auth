<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{
    
    public function index()
    {
        return view('user-dashboard.index');
    }

}
