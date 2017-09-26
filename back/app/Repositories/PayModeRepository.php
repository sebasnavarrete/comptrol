<?php

namespace App\Repositories;

use App\Models\PayMode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PayModeRepository
 * @package App\Repositories
 * @version September 24, 2017, 5:58 pm UTC
 *
 * @method PayMode findWithoutFail($id, $columns = ['*'])
 * @method PayMode find($id, $columns = ['*'])
 * @method PayMode first($columns = ['*'])
*/
class PayModeRepository extends BaseRepository
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
        return PayMode::class;
    }
}
