<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version September 24, 2017, 5:51 pm UTC
 *
 * @property string name
 * @property integer type
 * @property integer status
 * @property integer cost
 * @property integer budget
 * @property integer currency
 * @property integer payMode
 * @property integer commission
 * @property integer oTime
 * @property integer pTime
 * @property integer mTime
 * @property integer eTime
 * @property integer dailyDedication
 * @property string|\Carbon\Carbon initialDate
 * @property string|\Carbon\Carbon internalDeadline
 * @property string|\Carbon\Carbon clientDeadline
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'integer',
        'status' => 'integer',
        'cost' => 'integer',
        'budget' => 'integer',
        'currency' => 'integer',
        'payMode' => 'integer',
        'commission' => 'integer',
        'oTime' => 'integer',
        'pTime' => 'integer',
        'mTime' => 'integer',
        'eTime' => 'integer',
        'dailyDedication' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
