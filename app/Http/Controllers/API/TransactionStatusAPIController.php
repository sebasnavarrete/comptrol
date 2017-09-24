<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTransactionStatusAPIRequest;
use App\Http\Requests\API\UpdateTransactionStatusAPIRequest;
use App\Models\TransactionStatus;
use App\Repositories\TransactionStatusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TransactionStatusController
 * @package App\Http\Controllers\API
 */

class TransactionStatusAPIController extends AppBaseController
{
    /** @var  TransactionStatusRepository */
    private $transactionStatusRepository;

    public function __construct(TransactionStatusRepository $transactionStatusRepo)
    {
        $this->transactionStatusRepository = $transactionStatusRepo;
    }

    /**
     * Display a listing of the TransactionStatus.
     * GET|HEAD /transactionStatuses
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transactionStatusRepository->pushCriteria(new RequestCriteria($request));
        $this->transactionStatusRepository->pushCriteria(new LimitOffsetCriteria($request));
        $transactionStatuses = $this->transactionStatusRepository->all();

        return $this->sendResponse($transactionStatuses->toArray(), 'Transaction Statuses retrieved successfully');
    }

    /**
     * Store a newly created TransactionStatus in storage.
     * POST /transactionStatuses
     *
     * @param CreateTransactionStatusAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTransactionStatusAPIRequest $request)
    {
        $input = $request->all();

        $transactionStatuses = $this->transactionStatusRepository->create($input);

        return $this->sendResponse($transactionStatuses->toArray(), 'Transaction Status saved successfully');
    }

    /**
     * Display the specified TransactionStatus.
     * GET|HEAD /transactionStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TransactionStatus $transactionStatus */
        $transactionStatus = $this->transactionStatusRepository->findWithoutFail($id);

        if (empty($transactionStatus)) {
            return $this->sendError('Transaction Status not found');
        }

        return $this->sendResponse($transactionStatus->toArray(), 'Transaction Status retrieved successfully');
    }

    /**
     * Update the specified TransactionStatus in storage.
     * PUT/PATCH /transactionStatuses/{id}
     *
     * @param  int $id
     * @param UpdateTransactionStatusAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransactionStatusAPIRequest $request)
    {
        $input = $request->all();

        /** @var TransactionStatus $transactionStatus */
        $transactionStatus = $this->transactionStatusRepository->findWithoutFail($id);

        if (empty($transactionStatus)) {
            return $this->sendError('Transaction Status not found');
        }

        $transactionStatus = $this->transactionStatusRepository->update($input, $id);

        return $this->sendResponse($transactionStatus->toArray(), 'TransactionStatus updated successfully');
    }

    /**
     * Remove the specified TransactionStatus from storage.
     * DELETE /transactionStatuses/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TransactionStatus $transactionStatus */
        $transactionStatus = $this->transactionStatusRepository->findWithoutFail($id);

        if (empty($transactionStatus)) {
            return $this->sendError('Transaction Status not found');
        }

        $transactionStatus->delete();

        return $this->sendResponse($id, 'Transaction Status deleted successfully');
    }
}
