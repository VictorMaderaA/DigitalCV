<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Template
 * @package App\Models
 * @version July 15, 2020, 4:22 pm UTC
 *
 * @property string $name
 * @property string $folderName
 * @property boolean $active
 */
class Template extends Model
{
    use SoftDeletes;

    public $table = 'templates';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'folderName',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'folderName' => 'string',
        'image' => 'string',
        'previewImage' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'folderName' => 'required'
    ];


}
