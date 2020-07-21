<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResumeRequest;
use App\Http\Requests\UpdateResumeRequest;
use App\Repositories\ResumeRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Resume;
use App\Repositories\TemplateRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ResumeController extends AppBaseController
{
    /** @var  ResumeRepository */
    private $resumeRepository;

    /** @var  TemplateRepository */
    private $templateRepository;

    public function __construct(ResumeRepository $resumeRepo, TemplateRepository $templateRepo)
    {
        self::middleware('role:Super', ['except' => ['preview']]);
        $this->resumeRepository = $resumeRepo;
    }

    /**
     * Display a listing of the Resume.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $resumes = $this->resumeRepository->paginate(30);

        return view('resumes.index')
            ->with('resumes', $resumes);
    }

    /**
     * Show the form for creating a new Resume.
     *
     * @return Response
     */
    public function create()
    {
        return view('resumes.create');
    }

    /**
     * Store a newly created Resume in storage.
     *
     * @param CreateResumeRequest $request
     *
     * @return Response
     */
    public function store(CreateResumeRequest $request)
    {
        $input = $request->all();

        $resume = $this->resumeRepository->create($input);

        Flash::success('Salvado exitosamente.');

        return redirect(route('resumes.index'));
    }

    /**
     * Display the specified Resume.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('No se encontro');

            return redirect(route('resumes.index'));
        }

        return view('resumes.show')->with('resume', $resume);
    }

    /**
     * Show the form for editing the specified Resume.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('No se encontro');

            return redirect(route('resumes.index'));
        }

        return view('resumes.edit')->with('resume', $resume);
    }

    /**
     * Update the specified Resume in storage.
     *
     * @param int $id
     * @param UpdateResumeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResumeRequest $request)
    {
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('No se encontro');

            return redirect(route('resumes.index'));
        }

        $resume = $this->resumeRepository->update($request->all(), $id);

        Flash::success('Se guardaron los cambios.');

        return redirect(route('resumes.index'));
    }

    /**
     * Remove the specified Resume from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('No se encontro');

            return redirect(route('resumes.index'));
        }

        $this->resumeRepository->delete($id);

        Flash::success('Eliminado correctamente.');

        return redirect(route('resumes.index'));
    }

        /**
     * Show the form for editing the specified Template.
     *
     * @param int $id
     *
     * @return Response
     */
    public function preview($id){
        /** @var Resume */
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('No se encontro');

            return redirect(route('resumes.index'));
        }

        $template = $resume->template()->first();

        if (view()->exists('cv-templates.'.$template->getAttributeValue('folderName')) == false) {
            Flash::error('No se encontro la plantilla');
            return redirect(route('templates.index'));
        }

        return view('cv-templates.'.$template->getAttributeValue('folderName'))
               ->with('content', $resume->getAttributeValue('content'));
    }
}
