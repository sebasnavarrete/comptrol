<?php

namespace App\Repositories;

use App\Models\TransactionStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransactionStatusRepository
 * @package App\Repositories
 * @version September 24, 2017, 6:01 pm UTC
 *
 * @method TransactionStatus findWithoutFail($id, $columns = ['*'])
 * @method TransactionStatus find($id, $columns = ['*'])
 * @method TransactionStatus first($columns = ['*'])
*/
class TransactionStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TransactionStatus::class;
    }
}
