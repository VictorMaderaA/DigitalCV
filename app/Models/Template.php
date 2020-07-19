<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Image;

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

    public function setPreviewFile(UploadedFile $file){
        $realName = $file->getClientOriginalName();
        $internalName = $file->hashName();
        $path = 'cv/templatePreview/';
        $img = Image::make($file->get());
        // resize the image to a height of 200 and constrain aspect ratio (auto width)
        $img->resize(null, 256, function ($constraint) {
            $constraint->aspectRatio();
        });
        $this->previewImage = $path . $internalName;
        Storage::disk('s3')->put($this->previewImage, $img->stream()->__toString());
        $this->saveOrFail();
    }

    public function getPreview(){
        if(!$this->previewImage){
            return null;
        }
        $expires = now()->addMinutes(10);
        return Storage::disk('s3')->temporaryUrl($this->previewImage, $expires);
    }

}
