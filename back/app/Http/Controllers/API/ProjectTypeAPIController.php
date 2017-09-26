<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProjectTypeAPIRequest;
use App\Http\Requests\API\UpdateProjectTypeAPIRequest;
use App\Models\ProjectType;
use App\Repositories\ProjectTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ProjectTypeController
 * @package App\Http\Controllers\API
 */

class ProjectTypeAPIController extends AppBaseController
{
    /** @var  ProjectTypeRepository */
    private $projectTypeRepository;

    public function __construct(ProjectTypeRepository $projectTypeRepo)
    {
        $this->projectTypeRepository = $projectTypeRepo;
    }

    /**
     * Display a listing of the ProjectType.
     * GET|HEAD /projectTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectTypeRepository->pushCriteria(new RequestCriteria($request));
        $this->projectTypeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $projectTypes = $this->projectTypeRepository->all();

        return $this->sendResponse($projectTypes->toArray(), 'Project Types retrieved successfully');
    }

    /**
     * Store a newly created ProjectType in storage.
     * POST /projectTypes
     *
     * @param CreateProjectTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectTypeAPIRequest $request)
    {
        $input = $request->all();

        $projectTypes = $this->projectTypeRepository->create($input);

        return $this->sendResponse($projectTypes->toArray(), 'Project Type saved successfully');
    }

    /**
     * Display the specified ProjectType.
     * GET|HEAD /projectTypes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProjectType $projectType */
        $projectType = $this->projectTypeRepository->findWithoutFail($id);

        if (empty($projectType)) {
            return $this->sendError('Project Type not found');
        }

        return $this->sendResponse($projectType->toArray(), 'Project Type retrieved successfully');
    }

    /**
     * Update the specified ProjectType in storage.
     * PUT/PATCH /projectTypes/{id}
     *
     * @param  int $id
     * @param UpdateProjectTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProjectType $projectType */
        $projectType = $this->projectTypeRepository->findWithoutFail($id);

        if (empty($projectType)) {
            return $this->sendError('Project Type not found');
        }

        $projectType = $this->projectTypeRepository->update($input, $id);

        return $this->sendResponse($projectType->toArray(), 'ProjectType updated successfully');
    }

    /**
     * Remove the specified ProjectType from storage.
     * DELETE /projectTypes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProjectType $projectType */
        $projectType = $this->projectTypeRepository->findWithoutFail($id);

        if (empty($projectType)) {
            return $this->sendError('Project Type not found');
        }

        $projectType->delete();

        return $this->sendResponse($id, 'Project Type deleted successfully');
    }
}
