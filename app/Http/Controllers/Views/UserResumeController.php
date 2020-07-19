<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Repositories\ResumeRepository;
use App\Repositories\TemplateRepository;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;

class UserResumeController extends Controller
{

    /** @var  TemplateRepository */
    private $templateRepository;

    /** @var  ResumeRepository */
    private $resumeRepository;

    public function __construct(TemplateRepository $templateRepo, ResumeRepository $resumeRepo)
    {
        $this->templateRepository = $templateRepo;
        $this->resumeRepository = $resumeRepo;
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
        /** @var User */
        $user = auth()->user();
        $templates = $this->templateRepository->allQuery([
            'active' => 1
        ])->paginate(15);

        $resumes = $user->resumes()->get();

        return view('user.resumes.index')
            ->with('resumes', $resumes)
            ->with('templates', $templates);
    }

    public function copyTemplate(Int $templateId)
    {
        /** @var User */
        $user = auth()->user();
        if(count($user->getSubscriptions()) <= 0){
            Flash::error('Seleccion un plan primero');
            return redirect(route('payment.index'));
        }
        $resumesCount = $user->resumes()->count();
        $subsLevel = $user->getSubscriptionLevel();
        switch ($subsLevel) {
            case 1:
                if($resumesCount >= 1){
                    Flash::error('Limite Alcanzado. Incrementa tu plan para utilizar mas plantillas o elimina de las que tienes actualmente');
                    return redirect()->back();
                }
                break;
            case 2:
                if($resumesCount >= 3){
                    Flash::error('Limite Alcanzado. Incrementa tu plan para utilizar mas plantillas o elimina de las que tienes actualmente');
                    return redirect()->back();
                }
                break;
            case 3:
                if($resumesCount >= 5){
                    Flash::error('Limite Alcanzado. Incrementa tu plan para utilizar mas plantillas o elimina de las que tienes actualmente');
                    return redirect()->back();
                }
                break;
            default:
                Flash::error('Ocurrio Un Error al Cargar tu Plan');
                break;
        }
        $this->resumeRepository->create([
            'user_id' => $user->id,
            'template_id' => $templateId,
            'main' => !($resumesCount >= 1)
        ]);
        Flash::success('Se agrego la plantilla a tu perfil');
        return redirect(route('my.resumes'));

    }

    public function edit(Int $resumeId){
        $resume = $this->resumeRepository->find($resumeId);
        if (empty($resume)) {
            Flash::error('No se encontro la informacion.');
            return redirect(route('my.resumes'));
        }
        $user = auth()->user();
        if ($resume->user_id !== $user->id) {
            Flash::error('No puedes acceder a esta plantilla.');
            return redirect(route('my.resumes'));
        }


        return view('user.resumes.edit')->with('resume', $resume);
    }

    public function update(Int $resumeId, Request $request)
    {
        $resume = $this->resumeRepository->find($resumeId);
        if (empty($resume)) {
            Flash::error('No se encontro la informacion.');
            return redirect(route('my.resumes'));
        }
        /** @var User */
        $user = auth()->user();
        if ($resume->user_id !== $user->id) {
            Flash::error('No puedes acceder a esta plantilla.');
            return redirect(route('my.resumes'));
        }

        if($request->input('main')){
            $prevMain = $user->resumes()->where('main', 1)->first();
            if($prevMain){
                $prevMain->main = false;
                $prevMain->save();
            }
        }

        $resume = $this->resumeRepository->update([
            'content' => $request->input('content'),
            'main' => $request->input('main'),
        ], $resumeId);

        Flash::success('Resume updated successfully.');
        return redirect(route('my.resumes'));
    }

    public function delete(Int $resumeId)
    {
        $resume = $this->resumeRepository->find($resumeId);
        if (empty($resume)) {
            Flash::error('No se encontro la informacion.');
            return redirect(route('my.resumes'));
        }
        $user = auth()->user();
        if ($resume->user_id !== $user->id) {
            Flash::error('No puedes acceder a esta plantilla.');
            return redirect(route('my.resumes'));
        }
        $this->resumeRepository->delete($resumeId);
        Flash::success('Se elimino correctamente');
        return redirect(route('my.resumes'));
    }

    public function downloadView($id){

        /** @var Resume */
        $resume = $this->resumeRepository->find($id);

        if (empty($resume)) {
            Flash::error('Resume not found');

            return redirect(route('resumes.index'));
        }

        $template = $resume->template()->first();

        if (view()->exists('cv-templates.'.$template->getAttributeValue('folderName')) == false) {
            Flash::error('Template not found');
            return redirect(route('templates.index'));
        }

        $contents = view('cv-templates.'.$template->getAttributeValue('folderName'))
        ->with('content', $resume->getAttributeValue('content'))->render();
        $name = Carbon::now()->dayOfYear();
        Storage::disk('local')->put("/temp/{$name}.html", $contents);
        $response = Storage::download("/temp/{$name}.html", 'template.html');
        return $response;
    }

}
