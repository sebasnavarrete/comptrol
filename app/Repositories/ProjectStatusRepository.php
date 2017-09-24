<?php

namespace App\Repositories;

use App\Models\ProjectStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectStatusRepository
 * @package App\Repositories
 * @version September 24, 2017, 6:00 pm UTC
 *
 * @method ProjectStatus findWithoutFail($id, $columns = ['*'])
 * @method ProjectStatus find($id, $columns = ['*'])
 * @method ProjectStatus first($columns = ['*'])
*/
class ProjectStatusRepository extends BaseRepository
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
        return ProjectStatus::class;
    }
}
