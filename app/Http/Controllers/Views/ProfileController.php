<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\User;
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
        return view('user.profile.index');
    }

    public function resume($userId){

        /** @var User */
        $user = User::find($userId);
        if(!$user){
            return redirect(route('welcome'));
        }
        $resume = $user->resumes()->where('main', 1)->first();
        if(!$resume){
            return redirect(route('welcome'));
        }

        $template = $resume->template()->first();

        if (view()->exists('cv-templates.'.$template->getAttributeValue('folderName')) == false) {
            return redirect(route('welcome'));
        }
        return view('cv-templates.'.$template->getAttributeValue('folderName'))
        ->with('content', $resume->getAttributeValue('content'));
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
