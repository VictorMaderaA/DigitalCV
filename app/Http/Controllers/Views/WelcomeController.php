<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Base\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(){
        return view('welcome');
    }

}
