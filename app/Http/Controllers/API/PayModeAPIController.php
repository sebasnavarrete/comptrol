<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePayModeAPIRequest;
use App\Http\Requests\API\UpdatePayModeAPIRequest;
use App\Models\PayMode;
use App\Repositories\PayModeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PayModeController
 * @package App\Http\Controllers\API
 */

class PayModeAPIController extends AppBaseController
{
    /** @var  PayModeRepository */
    private $payModeRepository;

    public function __construct(PayModeRepository $payModeRepo)
    {
        $this->payModeRepository = $payModeRepo;
    }

    /**
     * Display a listing of the PayMode.
     * GET|HEAD /payModes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->payModeRepository->pushCriteria(new RequestCriteria($request));
        $this->payModeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $payModes = $this->payModeRepository->all();

        return $this->sendResponse($payModes->toArray(), 'Pay Modes retrieved successfully');
    }

    /**
     * Store a newly created PayMode in storage.
     * POST /payModes
     *
     * @param CreatePayModeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePayModeAPIRequest $request)
    {
        $input = $request->all();

        $payModes = $this->payModeRepository->create($input);

        return $this->sendResponse($payModes->toArray(), 'Pay Mode saved successfully');
    }

    /**
     * Display the specified PayMode.
     * GET|HEAD /payModes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PayMode $payMode */
        $payMode = $this->payModeRepository->findWithoutFail($id);

        if (empty($payMode)) {
            return $this->sendError('Pay Mode not found');
        }

        return $this->sendResponse($payMode->toArray(), 'Pay Mode retrieved successfully');
    }

    /**
     * Update the specified PayMode in storage.
     * PUT/PATCH /payModes/{id}
     *
     * @param  int $id
     * @param UpdatePayModeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePayModeAPIRequest $request)
    {
        $input = $request->all();

        /** @var PayMode $payMode */
        $payMode = $this->payModeRepository->findWithoutFail($id);

        if (empty($payMode)) {
            return $this->sendError('Pay Mode not found');
        }

        $payMode = $this->payModeRepository->update($input, $id);

        return $this->sendResponse($payMode->toArray(), 'PayMode updated successfully');
    }

    /**
     * Remove the specified PayMode from storage.
     * DELETE /payModes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PayMode $payMode */
        $payMode = $this->payModeRepository->findWithoutFail($id);

        if (empty($payMode)) {
            return $this->sendError('Pay Mode not found');
        }

        $payMode->delete();

        return $this->sendResponse($id, 'Pay Mode deleted successfully');
    }
}
