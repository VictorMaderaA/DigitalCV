<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Repositories\FileRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;

class UserFileController extends Controller
{

    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $files = $this->fileRepository->allQuery([
            'user_id' => auth()->user()->id
        ])->paginate(30);

        return view('user.files.index')
            ->with('files', $files);
    }

    /**
     * Store a newly created File in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        /** @var User */
        $user = auth()->user();
        if(count($user->getSubscriptions()) <= 0){
            Flash::error('Seleccion un plan primero');
            return redirect(route('payment.index'));
        }
        $subsLevel = $user->getSubscriptionLevel();
        switch ($subsLevel) {
            case 1:
                Flash::error('Es necesario el plan LitePlus o superior para almacenar archivos');
                return redirect()->back();
                break;
            case 2:
                break;
            case 3:
                break;
            default:
                Flash::error('Ocurrio Un Error al Cargar tu Plan');
                break;
        }

        if(count($request->allFiles()) <= 0){
            return redirect(route('my.files'));
        }

        File::storeFile($request->file('file'));
        // $file = $this->fileRepository->create($input);

        Flash::success('Archivo almacenado.');

        return redirect(route('my.files'));
    }

    public function show($fileId){
        /** @var User */
        $user = auth()->user();
        $file = $user->files()->findOrFail($fileId);
        if(!$file){
            Flash::error('No se encontro el archivo');
            return redirect(route('my.files'));
        }
        $expires = now()->addMinutes(10);
        return redirect(Storage::disk('s3')->temporaryUrl($file->getAttribute('path'), $expires));
    }

}
