<?php

namespace App\Repositories;

use App\Models\TransactionType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransactionTypeRepository
 * @package App\Repositories
 * @version September 24, 2017, 6:01 pm UTC
 *
 * @method TransactionType findWithoutFail($id, $columns = ['*'])
 * @method TransactionType find($id, $columns = ['*'])
 * @method TransactionType first($columns = ['*'])
*/
class TransactionTypeRepository extends BaseRepository
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
        return TransactionType::class;
    }
}
