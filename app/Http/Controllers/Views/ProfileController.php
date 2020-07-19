<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getFile(Int $userId, Int $fileId){
        $file = File::query()->findOrFail($fileId);
        if($file->getAttributeValue('user_id') !== $userId){
            return response('Error', 404);
        }
        $expires = now()->addMinutes(10);
        return redirect(Storage::disk('s3')->temporaryUrl($file->getAttribute('path'), $expires));
    }
}
