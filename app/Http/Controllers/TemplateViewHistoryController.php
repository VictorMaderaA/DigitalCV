<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTemplateViewHistoryRequest;
use App\Http\Requests\UpdateTemplateViewHistoryRequest;
use App\Repositories\TemplateViewHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TemplateViewHistoryController extends AppBaseController
{
    /** @var  TemplateViewHistoryRepository */
    private $templateViewHistoryRepository;

    public function __construct(TemplateViewHistoryRepository $templateViewHistoryRepo)
    {
        $this->templateViewHistoryRepository = $templateViewHistoryRepo;
    }

    /**
     * Display a listing of the TemplateViewHistory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $templateViewHistories = $this->templateViewHistoryRepository->all();

        return view('template_view_histories.index')
            ->with('templateViewHistories', $templateViewHistories);
    }

    /**
     * Show the form for creating a new TemplateViewHistory.
     *
     * @return Response
     */
    public function create()
    {
        return view('template_view_histories.create');
    }

    /**
     * Store a newly created TemplateViewHistory in storage.
     *
     * @param CreateTemplateViewHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateTemplateViewHistoryRequest $request)
    {
        $input = $request->all();

        $templateViewHistory = $this->templateViewHistoryRepository->create($input);

        Flash::success('Template View History saved successfully.');

        return redirect(route('templateViewHistories.index'));
    }

    /**
     * Display the specified TemplateViewHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $templateViewHistory = $this->templateViewHistoryRepository->find($id);

        if (empty($templateViewHistory)) {
            Flash::error('Template View History not found');

            return redirect(route('templateViewHistories.index'));
        }

        return view('template_view_histories.show')->with('templateViewHistory', $templateViewHistory);
    }

    /**
     * Show the form for editing the specified TemplateViewHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $templateViewHistory = $this->templateViewHistoryRepository->find($id);

        if (empty($templateViewHistory)) {
            Flash::error('Template View History not found');

            return redirect(route('templateViewHistories.index'));
        }

        return view('template_view_histories.edit')->with('templateViewHistory', $templateViewHistory);
    }

    /**
     * Update the specified TemplateViewHistory in storage.
     *
     * @param int $id
     * @param UpdateTemplateViewHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTemplateViewHistoryRequest $request)
    {
        $templateViewHistory = $this->templateViewHistoryRepository->find($id);

        if (empty($templateViewHistory)) {
            Flash::error('Template View History not found');

            return redirect(route('templateViewHistories.index'));
        }

        $templateViewHistory = $this->templateViewHistoryRepository->update($request->all(), $id);

        Flash::success('Template View History updated successfully.');

        return redirect(route('templateViewHistories.index'));
    }

    /**
     * Remove the specified TemplateViewHistory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $templateViewHistory = $this->templateViewHistoryRepository->find($id);

        if (empty($templateViewHistory)) {
            Flash::error('Template View History not found');

            return redirect(route('templateViewHistories.index'));
        }

        $this->templateViewHistoryRepository->delete($id);

        Flash::success('Template View History deleted successfully.');

        return redirect(route('templateViewHistories.index'));
    }
}
