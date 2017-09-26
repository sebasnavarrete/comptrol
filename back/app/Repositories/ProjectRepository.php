<?php

namespace App\Repositories;

use App\Models\Project;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectRepository
 * @package App\Repositories
 * @version September 24, 2017, 5:51 pm UTC
 *
 * @method Project findWithoutFail($id, $columns = ['*'])
 * @method Project find($id, $columns = ['*'])
 * @method Project first($columns = ['*'])
*/
class ProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'status',
        'cost',
        'budget',
        'currency',
        'payMode',
        'commission',
        'oTime',
        'pTime',
        'mTime',
        'eTime',
        'dailyDedication',
        'initialDate',
        'internalDeadline',
        'clientDeadline'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Project::class;
    }
}
