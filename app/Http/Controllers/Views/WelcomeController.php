<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request){
        return view('welcome');
    }
}
