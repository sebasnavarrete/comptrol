<?php

namespace App\Repositories;

use App\Models\ProjectType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectTypeRepository
 * @package App\Repositories
 * @version September 24, 2017, 6:00 pm UTC
 *
 * @method ProjectType findWithoutFail($id, $columns = ['*'])
 * @method ProjectType find($id, $columns = ['*'])
 * @method ProjectType first($columns = ['*'])
*/
class ProjectTypeRepository extends BaseRepository
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
        return ProjectType::class;
    }
}
