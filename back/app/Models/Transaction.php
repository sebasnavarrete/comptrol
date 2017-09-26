<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version September 24, 2017, 6:02 pm UTC
 *
 * @property integer project_id
 * @property integer user_id
 * @property integer status
 * @property string reason
 * @property integer type
 * @property integer money
 * @property integer currency
 * @property integer payMode
 * @property integer date
 * @property string comments
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transaction';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'project_id',
        'user_id',
        'status',
        'reason',
        'type',
        'money',
        'currency',
        'payMode',
        'date',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'integer',
        'user_id' => 'integer',
        'status' => 'integer',
        'reason' => 'string',
        'type' => 'integer',
        'money' => 'integer',
        'currency' => 'integer',
        'payMode' => 'integer',
        'date' => 'integer',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
