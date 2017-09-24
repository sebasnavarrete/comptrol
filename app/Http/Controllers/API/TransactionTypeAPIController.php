<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTransactionTypeAPIRequest;
use App\Http\Requests\API\UpdateTransactionTypeAPIRequest;
use App\Models\TransactionType;
use App\Repositories\TransactionTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TransactionTypeController
 * @package App\Http\Controllers\API
 */

class TransactionTypeAPIController extends AppBaseController
{
    /** @var  TransactionTypeRepository */
    private $transactionTypeRepository;

    public function __construct(TransactionTypeRepository $transactionTypeRepo)
    {
        $this->transactionTypeRepository = $transactionTypeRepo;
    }

    /**
     * Display a listing of the TransactionType.
     * GET|HEAD /transactionTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transactionTypeRepository->pushCriteria(new RequestCriteria($request));
        $this->transactionTypeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $transactionTypes = $this->transactionTypeRepository->all();

        return $this->sendResponse($transactionTypes->toArray(), 'Transaction Types retrieved successfully');
    }

    /**
     * Store a newly created TransactionType in storage.
     * POST /transactionTypes
     *
     * @param CreateTransactionTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTransactionTypeAPIRequest $request)
    {
        $input = $request->all();

        $transactionTypes = $this->transactionTypeRepository->create($input);

        return $this->sendResponse($transactionTypes->toArray(), 'Transaction Type saved successfully');
    }

    /**
     * Display the specified TransactionType.
     * GET|HEAD /transactionTypes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TransactionType $transactionType */
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            return $this->sendError('Transaction Type not found');
        }

        return $this->sendResponse($transactionType->toArray(), 'Transaction Type retrieved successfully');
    }

    /**
     * Update the specified TransactionType in storage.
     * PUT/PATCH /transactionTypes/{id}
     *
     * @param  int $id
     * @param UpdateTransactionTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransactionTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var TransactionType $transactionType */
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            return $this->sendError('Transaction Type not found');
        }

        $transactionType = $this->transactionTypeRepository->update($input, $id);

        return $this->sendResponse($transactionType->toArray(), 'TransactionType updated successfully');
    }

    /**
     * Remove the specified TransactionType from storage.
     * DELETE /transactionTypes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TransactionType $transactionType */
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            return $this->sendError('Transaction Type not found');
        }

        $transactionType->delete();

        return $this->sendResponse($id, 'Transaction Type deleted successfully');
    }
}
