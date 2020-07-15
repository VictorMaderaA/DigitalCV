<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Resume
 * @package App\Models
 * @version July 15, 2020, 5:01 pm UTC
 *
 * @property User
 * @property Template
 * @property unssignedInteger $user_id
 * @property unssignedInteger $template_id
 * @property string $content
 * @property boolean $main
 */
class Resume extends Model
{
    use SoftDeletes;

    public $table = 'resumes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'template_id',
        'content',
        'main'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'main' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|email',
        'template_id' => 'required|number',
        'content' => 'required|string'
    ];

    
}
