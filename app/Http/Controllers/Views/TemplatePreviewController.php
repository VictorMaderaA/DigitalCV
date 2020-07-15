<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Base\Controller;
use Illuminate\Http\Request;

class TemplatePreviewController extends Controller
{

    public function __invoke($templateId){
        return redirect('/cv-templates/'.$templateId.'/index.html');
    }
}
