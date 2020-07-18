<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Repositories\TemplateRepository;
use App\Repositories\TemplateViewHistoryRepository;
use Illuminate\Http\Request;

class UserMediaController extends Controller
{

    /** @var  TemplateRepository */
    private $templateRepository;

    /** @var  TemplateViewHistoryRepository */
    private $templateViewHistoryRepository;

    public function __construct(TemplateRepository $templateRepo, TemplateViewHistoryRepository $templateViewHistoryRepo)
    {
        $this->templateRepository = $templateRepo;
        $this->templateViewHistoryRepository = $templateViewHistoryRepo;
    }

    /**
     * Display a listing of the Template.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $templates = $this->templateRepository->paginate(30);

        return view('user.resumes.index')
            ->with('templates', $templates);
    }

}
