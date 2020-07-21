<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\File;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class FileController extends AppBaseController
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        self::middleware(['role:Super']);
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
        $files = $this->fileRepository->paginate(30);

        return view('files.index')
            ->with('files', $files);
    }

    /**
     * Show the form for creating a new File.
     *
     * @return Response
     */
    public function create()
    {
        return view('files.create');
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
        $input = $request->all();

        File::storeFile($request->file('file'));
        // $file = $this->fileRepository->create($input);

        Flash::success('Archivo guardado.');

        return redirect(route('files.index'));
    }

    /**
     * Display the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        return view('files.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified File.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        return view('files.edit')->with('file', $file);
    }

    /**
     * Update the specified File in storage.
     *
     * @param int $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        $file = $this->fileRepository->update($request->all(), $id);

        Flash::success('Archivo actualizado.');

        return redirect(route('files.index'));
    }

    /**
     * Remove the specified File from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        $this->fileRepository->delete($id);

        Flash::success('Archivo eliminado.');

        return redirect(route('files.index'));
    }
}
