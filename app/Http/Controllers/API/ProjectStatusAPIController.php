<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProjectStatusAPIRequest;
use App\Http\Requests\API\UpdateProjectStatusAPIRequest;
use App\Models\ProjectStatus;
use App\Repositories\ProjectStatusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProjectStatusController
 * @package App\Http\Controllers\API
 */

class ProjectStatusAPIController extends AppBaseController
{
    /** @var  ProjectStatusRepository */
    private $projectStatusRepository;

    public function __construct(ProjectStatusRepository $projectStatusRepo)
    {
        $this->projectStatusRepository = $projectStatusRepo;
    }

    /**
     * Display a listing of the ProjectStatus.
     * GET|HEAD /projectStatuses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectStatusRepository->pushCriteria(new RequestCriteria($request));
        $this->projectStatusRepository->pushCriteria(new LimitOffsetCriteria($request));
        $projectStatuses = $this->projectStatusRepository->all();

        return $this->sendResponse($projectStatuses->toArray(), 'Project Statuses retrieved successfully');
    }

    /**
     * Store a newly created ProjectStatus in storage.
     * POST /projectStatuses
     *
     * @param CreateProjectStatusAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectStatusAPIRequest $request)
    {
        $input = $request->all();

        $projectStatuses = $this->projectStatusRepository->create($input);

        return $this->sendResponse($projectStatuses->toArray(), 'Project Status saved successfully');
    }

    /**
     * Display the specified ProjectStatus.
     * GET|HEAD /projectStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProjectStatus $projectStatus */
        $projectStatus = $this->projectStatusRepository->findWithoutFail($id);

        if (empty($projectStatus)) {
            return $this->sendError('Project Status not found');
        }

        return $this->sendResponse($projectStatus->toArray(), 'Project Status retrieved successfully');
    }

    /**
     * Update the specified ProjectStatus in storage.
     * PUT/PATCH /projectStatuses/{id}
     *
     * @param  int $id
     * @param UpdateProjectStatusAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectStatusAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProjectStatus $projectStatus */
        $projectStatus = $this->projectStatusRepository->findWithoutFail($id);

        if (empty($projectStatus)) {
            return $this->sendError('Project Status not found');
        }

        $projectStatus = $this->projectStatusRepository->update($input, $id);

        return $this->sendResponse($projectStatus->toArray(), 'ProjectStatus updated successfully');
    }

    /**
     * Remove the specified ProjectStatus from storage.
     * DELETE /projectStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProjectStatus $projectStatus */
        $projectStatus = $this->projectStatusRepository->findWithoutFail($id);

        if (empty($projectStatus)) {
            return $this->sendError('Project Status not found');
        }

        $projectStatus->delete();

        return $this->sendResponse($id, 'Project Status deleted successfully');
    }
}
