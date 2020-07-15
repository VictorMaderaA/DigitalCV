<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Base\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileCvController extends Controller
{

    public function __invoke(){
        return view('cv-templates.tmpl0002');
    }

    public function form(Request $request){
        $validator = Validator::make($request->all(), [
            '*' => 'string',
        ]);
        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }
        return response('OK', 200);
    }
}
