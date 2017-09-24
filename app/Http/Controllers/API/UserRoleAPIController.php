<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateUserRoleAPIRequest;
use App\Http\Requests\API\UpdateUserRoleAPIRequest;
use App\Models\UserRole;
use App\Repositories\UserRoleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class UserRoleController
 * @package App\Http\Controllers\API
 */

class UserRoleAPIController extends AppBaseController
{
    /** @var  UserRoleRepository */
    private $userRoleRepository;

    public function __construct(UserRoleRepository $userRoleRepo)
    {
        $this->userRoleRepository = $userRoleRepo;
    }

    /**
     * Display a listing of the UserRole.
     * GET|HEAD /userRoles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRoleRepository->pushCriteria(new RequestCriteria($request));
        $this->userRoleRepository->pushCriteria(new LimitOffsetCriteria($request));
        $userRoles = $this->userRoleRepository->all();

        return $this->sendResponse($userRoles->toArray(), 'User Roles retrieved successfully');
    }

    /**
     * Store a newly created UserRole in storage.
     * POST /userRoles
     *
     * @param CreateUserRoleAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRoleAPIRequest $request)
    {
        $input = $request->all();

        $userRoles = $this->userRoleRepository->create($input);

        return $this->sendResponse($userRoles->toArray(), 'User Role saved successfully');
    }

    /**
     * Display the specified UserRole.
     * GET|HEAD /userRoles/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var UserRole $userRole */
        $userRole = $this->userRoleRepository->findWithoutFail($id);

        if (empty($userRole)) {
            return $this->sendError('User Role not found');
        }

        return $this->sendResponse($userRole->toArray(), 'User Role retrieved successfully');
    }

    /**
     * Update the specified UserRole in storage.
     * PUT/PATCH /userRoles/{id}
     *
     * @param  int $id
     * @param UpdateUserRoleAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRoleAPIRequest $request)
    {
        $input = $request->all();

        /** @var UserRole $userRole */
        $userRole = $this->userRoleRepository->findWithoutFail($id);

        if (empty($userRole)) {
            return $this->sendError('User Role not found');
        }

        $userRole = $this->userRoleRepository->update($input, $id);

        return $this->sendResponse($userRole->toArray(), 'UserRole updated successfully');
    }

    /**
     * Remove the specified UserRole from storage.
     * DELETE /userRoles/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var UserRole $userRole */
        $userRole = $this->userRoleRepository->findWithoutFail($id);

        if (empty($userRole)) {
            return $this->sendError('User Role not found');
        }

        $userRole->delete();

        return $this->sendResponse($id, 'User Role deleted successfully');
    }
}
