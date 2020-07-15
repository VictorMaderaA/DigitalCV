<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TemplateViewHistory
 * @package App\Models
 * @version July 15, 2020, 4:48 pm UTC
 *
 * @property Template
 * @property unsignedInteger $template_id
 */
class TemplateViewHistory extends Model
{
    use SoftDeletes;

    public $table = 'template_view_histories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'template_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'template_id' => 'required'
    ];

    
}
